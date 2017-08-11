<?php
/**
 * @copyright        2016 opencart.cn - All Rights Reserved
 * @link             http://www.guangdawangluo.com
 * @author           TL <mengwb@opencart.cn>
 * @created          2016-12-14 11:22:04
 * @modified         2016-12-14 17:37:17
 */

// Heading
$_['heading_title']     = '商品導入/導出';

// Text
$_['text_success']      = '成功：您已成功導入您的分類和商品';
$_['text_nochange']     = '服務器上的數據沒有發生改變';
$_['text_log_details']  = '更多細節參見系統錯誤日誌';

// Entry
$_['entry_restore']     = '從Excel中導入';
$_['entry_description'] = '使用smart導入/導出Excel文件來管理您的商品';
$_['entry_exportway_sel'] = '請選擇您希望導出您商品的方式：';
$_['entry_start_id'] = '商品開始id：';
$_['entry_end_id']   = '商品結束id:';
$_['entry_start_index'] = '導出數量';
$_['entry_end_index'] = '導出批號:';


// Button labels
$_['button_import']     = '增量導入';
$_['button_export']     = '增量導出';
$_['button_export_pid']     = '以商品id導出';
$_['button_export_page']     = '批量導出';

//Error
$_['error_exist_product'] = '商品id %s 在數據庫中已經存在, 請檢查您的excel文件!';
$_['error_permission']          = '警告: 您沒有權限修改導入/導出!';
$_['error_upload']              = '導入的電子錶格無效或其中的數據格式錯誤!';
$_['error_sheet_count']         = '導入/導出: 無效的工作表數量, 期望值：8';
$_['error_categories_header']   = '導入/導出: 分類表的header頭無效';
$_['error_filtergroups_header']   = '導入/導出: 過濾器分組表的header頭無效';
$_['error_filters_header']   = '導入/導出: 過濾器表的header頭無效';
$_['error_products_header']     = '導入/導出: 商品表的header頭無效';
$_['error_descriptions_header']     = '導入/導出: 描述表的header頭無效';
$_['error_additionalimages_header']     = '導入/導出: 附加圖像表的header頭無效';
$_['error_product_options_header']      = '導入/導出: 商品選項表的header頭無效';
$_['error_options_header']      = '導入/導出: 選項表的header頭無效';
$_['error_option_values_header']      = '導入/導出: 選項值表的header頭無效';
$_['error_attributes_header']   = '導入/導出: 屬性表的header頭無效';
$_['error_specials_header']     = '導入/導出: 特價表的header頭無效';
$_['error_discounts_header']    = '導入/導出: 折扣表的header頭無效';
$_['error_rewards_header']      = '導入/導出: 報酬表的header頭無效';
$_['error_select_file']         = '導入/導出: 單擊\"導入\"之前請選擇文件';
$_['error_post_max_size']       = '導入/導出: 文件大小超過 %1 (查看php設置 \'post_max_size\')';
$_['error_upload_max_filesize'] = '導入/導出: 文件大小超過 %1 (查看php設置 \'upload_max_filesize\')';
$_['error_pid_no_data']         = '沒有制定商品的開始和結束id';
$_['error_page_no_data']        = '沒有更多的產品數據';
$_['error_param_not_number']        = '參數必須為數字';
