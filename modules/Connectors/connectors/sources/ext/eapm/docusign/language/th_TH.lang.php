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

$connector_strings = [
    'LBL_LICENSING_INFO' => 'ขั้นตอนการใช้ตัวเชื่อมต่อ DocuSign:
        <br> - สร้างคีย์การรวม
        <br> - เปิดใช้งาน DocuSign Connect สำหรับซอง
        (เช่น เว็บฮุคที่ DocuSign ใช้เพื่อสมัครสมาชิกจุดเข้าสู่ Sugar)
        <br> - ตั้งแอปพลิเคชันใหม่ใน DocuSign และตรวจดูให้แน่ใจว่าได้แทรก url นำทางและสร้างคีย์ลับเอาไว้แล้ว
        url นำทางต้องเป็น https://SUGAR_URL/oauth-handler/DocuSignOauth2Redirect
        <br> ในกรณีที่มีการจำกัด IP ในอินสแตนส์ Sugar ให้เข้าไปทำไวท์ลิสต์ที่อยู่ IP ของ DocuSign',
    'environment' => 'สภาพแวดล้อม',
    'integration_key' => 'คีย์การรวม',
    'client_secret' => 'ข้อมูลลับของไคลเอนต์',
];
