<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Kemas kini sistem tersedia';
$lang['emails_updates_available_message'] = <<<EOT
Halo,

Kemas kini sistem baharu telah dikesan untuk {site_anchor}.

Kemas kini ini mungkin merangkumi tampalan keselamatan, penambahbaikan prestasi, atau ciri baharu.
Kami mengesyorkan agar anda menyemaknya secepat mungkin.

Anda boleh menyemak dan mengurus kemas kini yang tersedia dari papan pemuka pentadbir:
{link}

Jika anda telah menyemak atau memasang kemas kini tersebut, tiada tindakan lanjut diperlukan.

Ini ialah mesej sistem automatik yang dihantar oleh {site_name}.
Sila jangan balas e-mel ini.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Pengaktifan akaun';
$lang['emails_account_activation_request_message'] = <<<EOT
Halo {name},

Terima kasih kerana mendaftar di {site_anchor}. Akaun anda telah dicipta dan mesti diaktifkan sebelum anda boleh menggunakannya.

Untuk mengaktifkan akaun anda, klik pautan berikut atau salin dan tampalkannya ke dalam pelayar anda:
{link}

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Pautan pengaktifan baharu';
$lang['emails_account_activation_resend_message'] = <<<EOT
Halo {name},

Anda baru-baru ini telah meminta pautan pengaktifan baharu di {site_anchor} kerana akaun anda belum aktif.
Untuk mengaktifkan akaun anda, klik pautan berikut atau salin dan tampalkannya ke dalam pelayar anda:
{link}

Jika anda tidak meminta ini, tiada tindakan lanjut diperlukan.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Akaun diaktifkan';
$lang['emails_account_activation_success_message'] = <<<EOT
Halo {name},

Akaun anda di {site_anchor} telah berjaya diaktifkan. Anda kini boleh <a href="{login_url}" target="_blank" rel="noopener">log masuk</a> pada bila-bila masa.

Semoga anda gembira bersama kami, terimalah salam hormat kami.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Akaun menunggu kelulusan';
$lang['emails_account_approval_pending_message'] = <<<EOT
Halo {name},

Terima kasih kerana menyertai kami di {site_anchor}. Akaun anda telah dicipta tetapi memerlukan kelulusan pentadbir laman sebelum ia diaktifkan.
Kami memohon maaf atas langkah penting ini, tetapi ia adalah untuk tujuan keselamatan semata-mata.

Anda akan menerima e-mel pengesahan sebaik sahaja akaun anda diluluskan.

Semoga anda gembira bersama kami, terimalah salam hormat kami.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Akaun diluluskan';
$lang['emails_account_approval_success_message'] = <<<EOT
Halo {name},

Berita baik! Akaun anda di {site_anchor} baru sahaja diluluskan.

Anda kini boleh log masuk dan mula menggunakan akaun anda dengan segera:
{link}

Kami gembira menerima kehadiran anda.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Akaun dipulihkan';
$lang['emails_account_restored_message'] = <<<EOT
Halo {name},

E-mel ini mengesahkan bahawa akaun anda di {site_anchor} telah berjaya dipulihkan.

Selamat kembali bersama kami dan kami harap kali ini anda akan menikmati pengalaman anda.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Selamat datang ke {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Halo {name},

Kebanyakan orang mempunyai siri e-mel alu-aluan yang sangat panjang selepas anda mendaftar di laman mereka.

Berita baik: kami bukan seperti kebanyakan orang.
Namun, kami tetap ingin mengalu-alukan anda dan mengucapkan terima kasih kerana menyertai kami di {site_anchor}.

Semoga anda gembira bersama kami, terimalah salam hormat kami.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Permintaan tukar e-mel';
$lang['emails_email_change_request_message'] = <<<EOT
Halo {name},

Anda menerima e-mel ini kerana kami menerima permintaan penukaran alamat e-mel untuk akaun anda di {site_anchor}.

Klik pautan berikut atau salin dan tampalkannya ke dalam pelayar anda jika anda ingin meneruskan:
{link}

Jika anda tidak meminta penukaran e-mel, tiada tindakan lanjut diperlukan.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Alamat e-mel ditukar';
$lang['emails_email_change_success_message'] = <<<EOT
Halo {name},

E-mel ini mengesahkan bahawa alamat e-mel yang digunakan pada {site_anchor} telah berjaya ditukar.

Jika anda tidak melakukan tindakan ini, sila hubungi kami secepat mungkin untuk menyelesaikan isu ini.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Amaran log masuk gagal';
$lang['emails_login_alert_failure_message'] = <<<EOT
Halo {name},

Seseorang baru-baru ini menggunakan kata laluan yang salah untuk cuba log masuk ke akaun {site_name} anda.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Jika ini bukan anda, jangan risau, cubaan log masuk mereka tidak berjaya.

Jika ini anda dan anda tidak mengingati kata laluan anda, klik pautan di bawah untuk menetapkannya semula:
{reset_link}

Jika anda menghadapi masalah untuk log masuk ke akaun anda, hubungi pasukan kami atau minta pautan log masuk satu klik.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Pemberitahuan log masuk berjaya';
$lang['emails_login_alert_success_message'] = <<<EOT
Halo {name},

Kami menghantar e-mel ini susulan log masuk yang berjaya ke akaun {site_name} anda.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Jika ini anda, anda boleh mengabaikan e-mel ini dengan selamat.

Jika anda tidak log masuk, sila tukar kata laluan anda dengan segera untuk melindungi akaun anda.

Untuk sebarang bantuan, hubungi pasukan sokongan kami.

-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Pautan log masuk pantas';
$lang['emails_login_magic_link_message'] = <<<EOT
Halo {name},

Anda telah meminta log masuk satu klik ke akaun anda di {site_anchor}.

Klik pautan di bawah, atau salin dan tampalkannya ke dalam pelayar anda, dan anda akan log masuk serta-merta:
{link}

Pautan ini akan tamat tempoh dalam 15 minit. Jika anda tidak meminta ini, sila abaikan e-mel ini.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Pengesahan dua faktor';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Halo {name},

Kod pengesahan dua faktor anda ialah: <strong>{code}</strong>

Anda sentiasa boleh menyahdayakan pengesahan dua faktor dalam tetapan akaun anda.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Permintaan set semula kata laluan';
$lang['emails_password_change_request_message'] = <<<EOT
Halo {name},

Anda menerima e-mel ini kerana kami menerima permintaan tetapan semula kata laluan untuk akaun anda di {site_anchor}.

Klik pautan berikut atau salin dan tampalkannya ke dalam pelayar anda jika anda ingin meneruskan:
{link}

Jika anda tidak meminta tetapan semula kata laluan, tiada tindakan lanjut diperlukan.

Tindakan ini diminta dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Kata laluan berjaya ditukar';
$lang['emails_password_change_success_message'] = <<<EOT
Halo {name},

E-mel ini mengesahkan bahawa kata laluan anda di {site_anchor} telah berjaya ditukar. Anda kini boleh <a href="{login_url}" target="_blank" rel="noopener">log masuk</a> menggunakan yang baharu.

Jika anda tidak melakukan tindakan ini, sila hubungi kami secepat mungkin untuk menyelesaikan isu ini.

Tindakan ini dilakukan dari alamat IP ini: {ip_link}.

Salam hormat,
-- Pasukan {site_name}.
EOT;
