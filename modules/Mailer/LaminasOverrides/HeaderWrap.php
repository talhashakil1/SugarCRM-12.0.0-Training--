<?php

/**
 * @see       https://github.com/laminas/laminas-mail for the canonical source repository
 * @copyright https://github.com/laminas/laminas-mail/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-mail/blob/master/LICENSE.md New BSD License
 */

/**
 * SugarCRM Changelog
 * 06/09/2020 Changed decoding process in mimeDecodeValue()
 */
namespace Laminas\Mail\Header;

use Laminas\Mail\Headers;
use Laminas\Mime\Mime;

/**
 * Utility class used for creating wrapped or MIME-encoded versions of header
 * values.
 */
abstract class HeaderWrap
{
    /**
     * Wrap a long header line
     *
     * @param  string          $value
     * @param  HeaderInterface $header
     * @return string
     */
    public static function wrap($value, HeaderInterface $header)
    {
        if ($header instanceof UnstructuredInterface) {
            return static::wrapUnstructuredHeader($value, $header);
        } elseif ($header instanceof StructuredInterface) {
            return static::wrapStructuredHeader($value, $header);
        }
        return $value;
    }

    /**
     * Wrap an unstructured header line
     *
     * Wrap at 78 characters or before, based on whitespace.
     *
     * @param string          $value
     * @param HeaderInterface $header
     * @return string
     */
    protected static function wrapUnstructuredHeader($value, HeaderInterface $header)
    {
        $encoding = $header->getEncoding();
        if ($encoding == 'ASCII') {
            return wordwrap($value, 78, Headers::FOLDING);
        }
        return static::mimeEncodeValue($value, $encoding, 78);
    }

    /**
     * Wrap a structured header line
     *
     * @param  string              $value
     * @param  StructuredInterface $header
     * @return string
     */
    protected static function wrapStructuredHeader($value, StructuredInterface $header)
    {
        $delimiter = $header->getDelimiter();

        $length = strlen($value);
        $lines  = [];
        $temp   = '';
        for ($i = 0; $i < $length; $i++) {
            $temp .= $value[$i];
            if ($value[$i] == $delimiter) {
                $lines[] = $temp;
                $temp    = '';
            }
        }
        return implode(Headers::FOLDING, $lines);
    }

    /**
     * MIME-encode a value
     *
     * Performs quoted-printable encoding on a value, setting maximum
     * line-length to 998.
     *
     * @param  string $value
     * @param  string $encoding
     * @param  int    $lineLength maximum line-length, by default 998
     * @return string Returns the mime encode value without the last line ending
     */
    public static function mimeEncodeValue($value, $encoding, $lineLength = 998)
    {
        return Mime::encodeQuotedPrintableHeader($value, $encoding, $lineLength, Headers::EOL);
    }

    /**
     * MIME-decode a value
     *
     * Performs quoted-printable decoding on a value.
     *
     * @param  string $value
     * @return string Returns the mime encode value without the last line ending
     */
    public static function mimeDecodeValue($value)
    {
        // SS-637: iconv_mime_decode removes some otherwise valid characters,
        // causing some header values to be inaccurate

        // Decode the header value using imap_mime_header_decode
        $decodedValue = imap_mime_header_decode($value);
        $ret = '';
        foreach ($decodedValue as $object) {
            if ($object->charset !== 'default') {
                $ret .= \InboundEmailUtils::handleCharsetTranslation($object->text, $object->charset);
            } else {
                $ret .= $object->text;
            }
        }
        return $ret;
    }

    private static function isNotDecoded($originalValue, $value)
    {
        return 0 === strpos($value, '=?')
            && strlen($value) - 2 === strpos($value, '?=')
            && false !== strpos($originalValue, $value);
    }

    /**
     * Test if is possible apply MIME-encoding
     *
     * @param string $value
     * @return bool
     */
    public static function canBeEncoded($value)
    {
        // avoid any wrapping by specifying line length long enough
        // "test" -> 4
        // "x-test: =?ISO-8859-1?B?dGVzdA==?=" -> 33
        //  8       +2          +3         +3  -> 16
        $charset = 'UTF-8';
        $lineLength = strlen($value) * 4 + strlen($charset) + 16;

        $preferences = [
            'scheme' => 'Q',
            'input-charset' => $charset,
            'output-charset' => $charset,
            'line-length' => $lineLength,
        ];

        $encoded = iconv_mime_encode('x-test', $value, $preferences);

        return (false !== $encoded);
    }
}
