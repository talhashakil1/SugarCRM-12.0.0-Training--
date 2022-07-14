<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

function unzip($zip_archive, $zip_dir)
{
    return unzip_file($zip_archive, null, $zip_dir);
}

function unzip_file($zip_archive, $archive_file, $zip_dir)
{
    if (!is_dir($zip_dir)) {
        if (defined('SUGAR_PHPUNIT_RUNNER') || defined('SUGARCRM_INSTALL')) {
            $GLOBALS['log']->fatal("Specified directory '$zip_dir' for zip file '$zip_archive' extraction does not exist.");

            return false;
        }

        $GLOBALS['log']->fatal(
            "Unable to extract file '$zip_archive'. Target directory '$zip_dir' does not exist."
        );

        die('Unable to extract file. Target directory does not exist.');
    }

    $zip = new ZipArchive();

    // we need realpath here for PHP streams support
    $res = $zip->open(UploadFile::realpath($zip_archive));

    if ($res !== true) {
        if (defined('SUGAR_PHPUNIT_RUNNER') || defined('SUGARCRM_INSTALL')) {
            $GLOBALS['log']->fatal(
                sprintf(
                    'ZIP Error(%d): Status(%s): Archive(%s): Directory(%s)',
                    $res,
                    $zip->status,
                    $zip_archive,
                    $zip_dir
                )
            );

            return false;
        }

        $GLOBALS['log']->fatal(
            sprintf(
                'ZIP Error(%d): Status(%s): Archive(%s): Directory(%s)',
                $res,
                $zip->status,
                $zip_archive,
                $zip_dir
            )
        );

        die(sprintf('Unable to extract file. ZIP Error(%d): Status(%s)', $res, $zip->status));
    }

    if ($archive_file !== null) {
        $res = $zip->extractTo(UploadFile::realpath($zip_dir), $archive_file);
    } else {
        $res = $zip->extractTo(UploadFile::realpath($zip_dir));
    }

    if ($res !== true) {
        if (defined('SUGAR_PHPUNIT_RUNNER') || defined('SUGARCRM_INSTALL')) {
            $GLOBALS['log']->fatal(
                sprintf(
                    'ZIP Error(%d): Status(%s): Archive(%s): Directory(%s)',
                    $res,
                    $zip->status,
                    $zip_archive,
                    $zip_dir
                )
            );

            return false;
        }

        $GLOBALS['log']->fatal(
            sprintf(
                'ZIP Error(%d): Status(%s): Archive(%s): Directory(%s)',
                $res,
                $zip->status,
                $zip_archive,
                $zip_dir
            )
        );

        die(sprintf('Unable to extract file. ZIP Error(%d): Status(%s)', $res, $zip->status));
    }

    return true;
}

function zip_dir($zip_dir, $zip_archive)
{
    if (!is_dir($zip_dir)) {
        if (!defined('SUGAR_PHPUNIT_RUNNER')) {
            $GLOBALS['log']->fatal(
                sprintf(
                    "Specified directory '%s' for zip file '%s' extraction does not exist.",
                    $zip_dir,
                    $zip_archive
                )
            );
            die('Specified directory for zip file extraction does not exist.');
        }

        return false;
    }

    $zip = new ZipArchive();
    // we need this for shadow path resolution to work
    // we need realpath here for PHP streams support
    $zip->open(UploadFile::realpath($zip_archive), ZipArchive::CREATE | ZipArchive::OVERWRITE);
    $path = UploadFile::realpath($zip_dir);

    /** @var RecursiveIteratorIterator|RecursiveDirectoryIterator $it */
    $it = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(
            $path,
            FilesystemIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS
        ),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($it as $fileinfo) {
        $subPathName = $it->getSubPathname();
        if ($fileinfo->isDir()) {
            $zip->addEmptyDir($subPathName);
        } else {
            $zip->addFile($fileinfo->getPathname(), $subPathName);
        }
    }
}

/**
 * Zip list of files, optionally stripping prefix
 *
 * FIXME: check what happens with streams
 *
 * @param string $zip_file
 * @param array  $file_list
 * @param string $prefix    Regular expression for the prefix to strip
 */
function zip_files_list($zip_file, $file_list, $prefix = '')
{
    $archive = new ZipArchive();
    $res = $archive->open(UploadFile::realpath($zip_file), ZipArchive::CREATE | ZipArchive::OVERWRITE); // we need realpath here for PHP streams support

    if ($res !== true) {
        $GLOBALS['log']->fatal("Unable to open zip file, check directory permissions: $zip_file");

        return false;
    }

    foreach ($file_list as $file) {
        if (!empty($prefix) && preg_match($prefix, $file, $matches) > 0) {
            $zipname = substr($file, strlen($matches[0]));
        } else {
            $zipname = $file;
        }

        $archive->addFile(UploadFile::realpath($file), $zipname);
    }

    return true;
}
