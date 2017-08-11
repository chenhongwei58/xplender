<?php
/**
 * @copyright        2016 opencart.cn - All Rights Reserved
 * @link             http://www.guangdawangluo.com
 * @author           TL <mengwb@opencart.cn>
 * @created          2016-11-22 9:12:00
 * @modified         2016-11-22 9:12:00
 */

// Heading
$_['heading_title']                    = '中文版設置';

// Text
$_['entry_image_quick_upload_mode']    = '圖片便捷上傳模式';
$_['text_stores']                      = '商店';
$_['text_success']                     = '成功： 您已成功保存您的設定！';
$_['text_edit']                        = '編輯系統設置';

//  Entry
$_['entry_icp']                        = 'ICP備案號';
$_['entry_unpaid_status']              = '待支付狀態';
$_['entry_paid_status']                = '已支付狀態';
$_['entry_cancled_status']             = '訂單取消狀態';
$_['entry_complete_time']              = '訂單自動確認收貨時間（天）';
$_['entry_unpaid_time']                = '待支付時間（小時）';
$_['entry_shipped_status']             = '已發貨狀態';

$_['entry_pc_payment']                 = 'PC端支付方式';
$_['entry_mobile_payment']             = '移動瀏覽器端支付方式';
$_['entry_weixin_payment']             = '微信端支付方式';

// Help
$_['help_icp']                         = 'ICP備案號';
$_['help_pc_payment']                  = '選擇正常的PC端時允許購買者可選用支付方式';
$_['help_mobile_payment']              = '選擇移動瀏覽器下時允許購買者可選用支付方式';
$_['help_weixin_payment']              = '選擇微信下時允許購買者可選用支付方式';
$_['help_unpaid_status']               = '未支付的訂單狀態，除「貨到付款」外的其餘付款方式，用戶下單後還沒有付款時的訂單確認狀態，貨到付款的狀態不能跟該狀態相同';
$_['help_paid_status']                 = '已付款狀態，所以在線支付支付完成後的回調狀態都應該是這裡設置的狀態';
$_['help_cancled_status']              = '未知付訂單取消後的狀態（超時自動更新，或APP中點「取消」按鈕取消）';
$_['help_complete_time']               = '客戶超過該時間未確認收貨，則自動確認收貨（用於APP）';
$_['help_unpaid_time']                 = '未支付的訂單狀態，在多長時間內允許進行支付';
$_['help_shipped_status']              = '訂單發貨後的訂單狀態。';
$_['help_image_quick_upload_mode']     = '不用選擇文件夾，圖片直接上傳到服務器，按 年月日 目錄保存';

// Error
$_['error_pc_payment']                 = 'PC端支付方式必填';
$_['error_mobile_payment']             = '移動瀏覽器端支付方式必填';
$_['error_weixin_payment']             = '微信端支付方式必填';
