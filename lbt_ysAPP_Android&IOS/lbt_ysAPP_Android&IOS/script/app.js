'use strict';
/**
 * @ngdoc overview
 * @name nahuobang
 * @description
 * # nahuobang
 *
 * Main module of the application.
 */
angular.module('app', ['vedioCtrl'])
    .config(['$compileProvider', function($compileProvider) {
        // http 安全配置白名单
        $compileProvider.aHrefSanitizationWhitelist(/^\s*(itms-services?|http|https|unsafe|ftp|mailto|chrome-extension):/);
        // Angular before v1.2 uses $compileProvider.urlSanitizationWhitelist(...)
    }])
 .run(['$rootScope', function ($rootScope) {
// /*       // 配置默认项 token user 等
           $rootScope.token = $rootScope.token || '';
        $rootScope.debug = false;
        //$rootScope.urlPrefix = '/admin/index.php?route='; //http://api.nahuobang.net
        //$rootScope.urlPrefix = 'http://120.24.221.27:8080/admin/index.php?route=';
 //       $rootScope.secret = '123321';

    		U.setStorage('api_url',"http://qc.xirrs.com/");
        U.setStorage('ApiInterfaceUrl',"http://qc.xirrs.com/app/api/");
       $rootScope.urlPrefix = 'http://qc.xirrs.com/app/api/';
        $rootScope.encodeType = 'multipart/form-data';//'application/x-www-form-urlencoded';
        $rootScope.contentType = 'application/x-www-form-urlencoded';
        $rootScope.limit = 10;
        $('[ng-app="app"]').css({opacity: 1});
        //if(!$rootScope.token) {
        //    $location.path('/user/signin');
        //}

	//	*/
    }


	]);
