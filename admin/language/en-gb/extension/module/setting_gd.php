<?php
/**
 * @copyright        2016 opencart.cn - All Rights Reserved
 * @link             http://www.guangdawangluo.com
 * @author           TL <mengwb@opencart.cn>
 * @created          2016-11-22 9:12:00
 * @modified         2016-11-22 9:12:00
 */

// Heading
$_['heading_title']                    = '中文版设置';

// Text
$_['entry_image_quick_upload_mode']    = '图片便捷上传模式';
$_['text_stores']                      = '商店';
$_['text_success']                     = '成功： 您已成功保存您的设定！';
$_['text_edit']                        = '编辑系统设置';

//  Entry
$_['entry_icp']                        = 'ICP备案号';
$_['entry_unpaid_status']              = '待支付状态';
$_['entry_paid_status']                = '已支付状态';
$_['entry_cancled_status']             = '订单取消状态';
$_['entry_complete_time']              = '订单自动确认收货时间（天）';
$_['entry_unpaid_time']                = '待支付时间（小时）';
$_['entry_shipped_status']             = '已发货状态';

$_['entry_pc_payment']                 = 'PC端支付方式';
$_['entry_mobile_payment']             = '移动浏览器端支付方式';
$_['entry_weixin_payment']             = '微信端支付方式';

// Help
$_['help_icp']                         = 'ICP备案号';
$_['help_pc_payment']                  = '选择正常的PC端时允许购买者可选用支付方式';
$_['help_mobile_payment']              = '选择移动浏览器下时允许购买者可选用支付方式';
$_['help_weixin_payment']              = '选择微信下时允许购买者可选用支付方式';
$_['help_unpaid_status']               = '未支付的订单状态，除“货到付款”外的其余付款方式，用户下单后还没有付款时的订单确认状态，货到付款的状态不能跟该状态相同';
$_['help_paid_status']                 = '已付款状态，所以在线支付支付完成后的回调状态都应该是这里设置的状态';
$_['help_cancled_status']              = '未知付订单取消后的状态（超时自动更新，或APP中点“取消”按钮取消）';
$_['help_complete_time']               = '客户超过该时间未确认收货，则自动确认收货（用于APP）';
$_['help_unpaid_time']                 = '未支付的订单状态，在多长时间内允许进行支付';
$_['help_shipped_status']              = '订单发货后的订单状态。';
$_['help_image_quick_upload_mode']     = '不用选择文件夹，图片直接上传到服务器，按 年月日 目录保存';

// Error
$_['error_pc_payment']                 = 'PC端支付方式必填';
$_['error_mobile_payment']             = '移动浏览器端支付方式必填';
$_['error_weixin_payment']             = '微信端支付方式必填';
