<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//account
$route['default_controller'] 							= 'home';
$route['trang-tai-khoan-dang-nhap.html']        		= 'Account/AccountLogin';
$route['trang-dang-nhap-(:num).html']					= 'Account/Login/$1';
$route['dang-xuat.html']								= 'Account/LogOut';
$route['trang-tai-khoan-dang-ky.html'] 		    		= 'Account/AccountRegister';
$route['trang-dang-ky-nguoi-mua-thue.html']				= 'Account/AccountRegisterBuyer';
$route['trang-dang-ky-nha-moi-gioi.html']  				= 'Account/AccountRegisterBroker';
$route['trang-dang-ky-doanh-nghiep.html']  				= 'Account/AccountRegisterEnterprise';
$route['trang-dang-ky-nguoi-ban-cho-thue.html'] 		= 'Account/AccountRegisterSeller';
$route['trang-nhan-ma-otp-(:num).html']  				= 'Account/PageOTP/$1';
$route['quen-mat-khau-nhan-otp-(:num).html']  			= 'Account/ForgotPasswordOTP/$1/$2';
$route['quen-mat-khau-nhap-email.html']         		= 'Account/ForgotPasswordEmail';
$route['quen-mat-khau-update-mat-khau-(:num).html']   	= 'Account/UpdatePassword/$1';
$route['thong-tin-ca-nhan.html']			    		= 'Account/Profile';
$route['thay-doi-mat-khau.html']						= 'Account/ChangePassword';

//PostNews
$route['dang-tin-truoc-dang-nhap.html'] 				= 'PostNews/PostNewsBeforeLogin';
$route['dang-tin-sau-dang-nhap.html'] 		    		= 'PostNews/PostNewsAfterLogin';
$route['tin-dang-du-an.html'] 		            		= 'PostNews/PostProjectBeforeLogin';
$route['tin-dang-nha-dep.html'] 		        		= 'PostNews/PostHomeDesignBeforeLogin';
$route['tin-dang-phong-dep.html'] 		        		= 'PostNews/PostRoomdesignBeforeLogin';
$route['loai-dang-tin-sau-dang-nhap.html']				= 'PostNews/PostTypeAfterLogin';


//Cho thuê
$route['cho-thue-truoc-dang-nhap.html']					= 'Lease/LeaseBeforeLogin';
$route['chi-tiet-cho-thue-truoc-dang-nhap.html']		= 'Lease/DetailLeaseBeforeLogin';

//Mua bán
$route['mua-ban-truoc-dang-nhap.html']					= 'Purchase/PurchaseBeforeLogin';
$route['chi-tiet-mua-ban-truoc-dang-nhap.html']			= 'Purchase/DetailPurchaseBeforeLogin';

//Dự án
$route['danh-sach-du-an-noi-bat.html']		    		= 'Project/ListOutstandingProject';
$route['danh-sach-du-an_moi_nhat.html']		    		= 'Project/ListProjectNew';
$route['chi-tiet-du-an-(:num).html']		            = 'Project/DetailProject/$1';

//chuyên gia
$route['chuyen-gia-doanh-nghiep.html']					= 'Expert/BusinessExpert';
$route['chuyen-gia-moi-gioi.html']						= 'Expert/BrokerExpert';
$route['chi-tiet-nha-moi-gioi.html']					= 'Expert/DetailBroker';
$route['chi-tiet-doanh-nghiep.html']					= 'Expert/DetailBusiness';

// thiết kế đẹp
$route['thiet-ke-nha-dep.html']							= 'DesignBeautifull/HomeDesign';
$route['chi-tiet-mau-nha-dep.html']			    		= 'DesignBeautifull/DetailHomeDesign';
$route['danh-sach-phong-dep.html']						= 'DesignBeautifull/BeautifulListRooms';

// tin tức
$route['tin-tuc.html']				            		= 'News/News';
$route['chi-tiet-tin-tuc.html']			        		= 'News/DetailsNews';


// bất động sản gần đây
$route['bat-dong-san-gan-day.html']		    			= 'RecentRealEstate';

// tiện ích
$route['tien-ich-lai-suat-vay.html'] 		    		= 'UtilitiesInterest';

// hướng dẫn
$route['huong-dan-sau-dang-nhap.html'] 		    		= 'TutorialAfterLogin';

// liên hệ
$route['lien-he.html']		                    		= 'Connect/ContactPage';
$route['gioi-thieu-chung.html']		            		= 'Connect/Introduction';
$route['so-do-website.html']		            		= 'Connect/DiagramWebsite';
$route['thong-tin-can-biet.html']						= 'Connect/NecessaryInformation';
$route['thoa-thuan-su-dung.html']						= 'Connect/UsageAgreement';
$route['quy-dinh-bao-mat.html']				    		= 'Connect/PrivacyPolicy';
$route['quy-trinh-giai-quyet-tranh-chap.html']  		= 'Connect/DisputeResolutionProcess';

//----------------------------admin-------------------

$route['tong-quan.html']		                		= 'admin/Dashboard';
// ví tiền

$route['vi-3s.html']		                    		= 'admin/Wallet/Wallet3s';
$route['nap-tien-vao-vi.html']		            		= 'admin/Wallet/WalletDeposit';
$route['mua-dich-vu.html']		                		= 'admin/Wallet/BuyService';
$route['mua-goi-ghim-tin-dang.html']		    		= 'admin/Wallet/BuyPacketNews';

// quản lý
$route['quan-ly-doi-nhom-nhan-vien.html']				= 'admin/Management/TeamManagement';

// quản lý tin
$route['quan-ly-tin-dang-mua-ban.html']		    		= 'admin/ManageNews/ManageNewsPurchase';
$route['quan-ly-tin-dang-cho-thue.html']				= 'admin/ManageNews/ManageNewsLease';
$route['quan-ly-tin-dang-du-an.html']		    		= 'admin/ManageNews/ManageNewsProject';
$route['quan-ly-tin-dang-thiet-ke.html']				= 'admin/ManageNews/ManageNewsDesign';
$route['quan-ly-tin-dang-tin-luu.html']		    		= 'admin/ManageNews/ManageNewsSave';

$route['404_override'] 									= '';
$route['translate_uri_dashes'] 							= FALSE;
