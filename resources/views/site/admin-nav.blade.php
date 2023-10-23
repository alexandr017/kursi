<?php $adminPanel = 1; ?>
<nav @if($adminPanel==0)  id="line-top" @elseif($adminPanel==1)  id="line-left"  @else id="line-right" @endif>
    <ul>
        <li title="Панель управления" class="first">
            <a href="/admin/index/">
                <svg class="admin-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32" height="32" viewBox="0 0 512 512">
                    <g><g><path d="M437.02,74.98C388.667,26.628,324.38,0,256,0S123.333,26.628,74.98,74.98C26.628,123.333,0,187.62,0,256
							s26.628,132.667,74.98,181.02C123.333,485.372,187.62,512,256,512s132.667-26.628,181.02-74.98
							C485.372,388.667,512,324.38,512,256S485.372,123.333,437.02,74.98z M256,478.609c-122.746,0-222.609-99.862-222.609-222.609
							S133.254,33.391,256,33.391S478.609,133.254,478.609,256S378.746,478.609,256,478.609z"/></g></g>
                    <g><g><rect x="239.304" y="66.445" width="33.391" height="54.973"/></g></g>
                    <g><g><rect x="144.041" y="97.397" transform="matrix(0.809 -0.5878 0.5878 0.809 -42.7066 118.3336)" width="33.391" height="54.973"/></g></g>
                    <g><g><rect x="85.16" y="178.422" transform="matrix(0.309 -0.9511 0.9511 0.309 -125.4502 239.1576)" width="33.392" height="54.975"/></g></g>
                    <g><g><rect x="74.387" y="289.382" transform="matrix(0.9511 -0.309 0.309 0.9511 -89.5896 46.456)" width="54.975" height="33.392"/></g></g>
                    <g><g><rect x="393.426" y="278.583" transform="matrix(0.309 -0.9511 0.9511 0.309 -7.6944 601.5519)" width="33.393" height="54.975"/></g></g>
                    <g><g><rect x="382.634" y="189.215" transform="matrix(0.9511 -0.309 0.309 0.9511 -43.5552 136.799)" width="54.975" height="33.393"/></g></g>
                    <g><g><rect x="323.78" y="108.202" transform="matrix(0.5878 -0.809 0.809 0.5878 43.7479 335.6581)" width="54.973" height="33.391"/></g></g>
                    <g><g><path d="M169.275,335.566v102.047h173.449V335.566H169.275z M309.333,404.222H202.666v-35.265h0h106.666V404.222z"/></g></g>
                    <g><g><path d="M272.696,233.859v-82.237h-33.391v82.237c-15.303,6.516-26.06,21.704-26.06,39.359c0,23.575,19.18,42.755,42.755,42.755
			s42.755-19.18,42.755-42.755C298.755,255.564,287.999,240.376,272.696,233.859z M256,282.583c-5.163,0-9.364-4.201-9.364-9.364
			c0-5.163,4.201-9.364,9.364-9.364c5.163,0,9.364,4.201,9.364,9.364C265.364,278.382,261.163,282.583,256,282.583z"/></g></g>
                </svg>
            </a>
        </li>
        @if(isset($editLink))
            <li title="Изменить текущий элемент" class="last">
                <a href="{{$editLink}}/">
                    <svg class="admin-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="32" height="32" viewBox="0 0 494.936 494.936" xml:space="preserve">
					<g>
                        <g>
                            <path d="M389.844,182.85c-6.743,0-12.21,5.467-12.21,12.21v222.968c0,23.562-19.174,42.735-42.736,42.735H67.157
								c-23.562,0-42.736-19.174-42.736-42.735V150.285c0-23.562,19.174-42.735,42.736-42.735h267.741c6.743,0,12.21-5.467,12.21-12.21
								s-5.467-12.21-12.21-12.21H67.157C30.126,83.13,0,113.255,0,150.285v267.743c0,37.029,30.126,67.155,67.157,67.155h267.741
								c37.03,0,67.156-30.126,67.156-67.155V195.061C402.054,188.318,396.587,182.85,389.844,182.85z"/>
                            <path d="M483.876,20.791c-14.72-14.72-38.669-14.714-53.377,0L221.352,229.944c-0.28,0.28-3.434,3.559-4.251,5.396l-28.963,65.069
								c-2.057,4.619-1.056,10.027,2.521,13.6c2.337,2.336,5.461,3.576,8.639,3.576c1.675,0,3.362-0.346,4.96-1.057l65.07-28.963
								c1.83-0.815,5.114-3.97,5.396-4.25L483.876,74.169c7.131-7.131,11.06-16.61,11.06-26.692
								C494.936,37.396,491.007,27.915,483.876,20.791z M466.61,56.897L257.457,266.05c-0.035,0.036-0.055,0.078-0.089,0.107
								l-33.989,15.131L238.51,247.3c0.03-0.036,0.071-0.055,0.107-0.09L447.765,38.058c5.038-5.039,13.819-5.033,18.846,0.005
								c2.518,2.51,3.905,5.855,3.905,9.414C470.516,51.036,469.127,54.38,466.61,56.897z"/>
                        </g>
                    </g>
				</svg>
                </a></li>
        @endif
    </ul>
</nav>
<style>
    @if($adminPanel!=0)
    #line-left,#line-right{background: #232323;width: 40px;position: fixed; @if($adminPanel==1)left: 0;@else right: 0;@endif font-size: 13px;top: 0;z-index: 44444;opacity: 0.5;}
    #line-left:hover,#line-right:hover{opacity: 1;}
    #line-left>ul,#line-right>ul{padding: 0; margin: 0;}
    #line-left>ul>li,#line-right>ul>li{ list-style-type: none; border-bottom: 1px solid #fff; background: #232323;position: relative;}
    #line-left>ul>li.first,#line-right>ul>li.first{background: #F44336;}
    #line-left>ul>li.first a:hover,#line-right>ul>li.first a:hover{background: #f33022;}
    #line-left>ul>li.last,#line-right>ul>li.last{background: #00b6f7;}
    #line-left>ul>li.last a:hover,#line-right>ul>li.last a:hover{background: #2196F3;}
    #line-left>ul>li.first a , #line-left ul li.last a,#line-right>ul>li.first a , #line-right ul li.last a{ font-size: 1.5em;}
    #line-left>ul>li>a,#line-right>ul>li>a{color: #fff; padding: 3.5px 0; display: block; text-align: center;}
    #line-left>ul>li>a:hover,#line-right>ul>li>a:hover{background: #000;color: #00b6f7;}
    #line-left .outset,#line-right .outset{margin: 0; border-bottom: 0; background: #232323; border-bottom: 1px solid #fff; height: 25px;}
    #line-left hr,#line-right hr{height: 1px;border-radius: 15px;padding: 0px 0;background: #544d4d;position: relative;width: 40%;margin: 5px 0;margin-left: 30%;display: inline-block; }
    #line-left hr:before,#line-right hr:before{content: '';position: absolute;height: 1px;background: #444040;top: -1px;z-index: 11;left: 0;height: 1px;width: 98%;margin-left: 1%;}
    #line-left>ul>li>ul{display: none; position: absolute;left: 40px; top: 0;background: #232323;padding: 0;margin: 0;}
    #line-right>ul>li>ul{display: none; position: absolute;right: 40px; top: 0;background: #232323;padding: 0;margin: 0;}
    #line-left>ul>li:hover>ul,#line-right>ul>li:hover>ul{display: inline-grid;}
    #line-left>ul>li>ul>li{list-style-type: none;float: left;padding: 4px;border: 1px solid #fff;}
    #line-right>ul>li>ul>li{list-style-type: none;float: right;padding: 4px;border: 1px solid #fff;}
    #line-left>ul>li>ul>li a,#line-right>ul>li>ul>li a{color: #fff;}
    #line-left .plus,#line-right  .plus{background: #a5ca38;}
    #line-left .plus:hover,#line-right .plus:hover{background: #8fb12c;}
    #line-left i i,#line-right i i{font-size: 0.5em}
    @else
    #line-top{background: #232323;width: inherit;position: fixed;left: 0;right: 0;margin: auto;font-size: 13px;top: 0;z-index: 3;opacity: 0.5;width: 465px;}
    #line-top:hover{opacity: 1}
    #line-top>ul {padding: 0;margin: 0;}
    #line-top>ul>li {list-style-type: none;border-right: 1px solid #fff;background: #232323;position: relative;display: inline-block;vertical-align: middle;height: 30px;float: left;}
    #line-top>ul>li.first {background: #F44336;}
    #line-top>ul>li.first a, #line-top>ul>li.last a{padding-top: 0}
    #line-top .outset {margin: 0;border-bottom: 0;background: #232323;border-right: 1px solid #fff;width: 25px;padding-top: 7px;}
    #line-top hr {height: 1px;border-radius: 15px;padding: 0px 0;background: #544d4d;position: relative;width: 40%;margin: 5px 0;margin-left: 30%;display: inline-block;}
    #line-top hr:before {content: '';position: absolute;height: 1px;background: #444040;top: -1px;z-index: 11;left: 0;height: 1px;width: 98%;margin-left: 1%;}
    #line-top>ul>li>a {color: #fff;padding: 1px 5px;display: block;text-align: center;height:30px;padding-top: 5px;}
    #line-top>ul>li>a:hover{background: #000;color: #00b6f7;}
    #line-top>ul>li>ul {display: none;position: absolute;left: 40px;top: 0;background: #232323;padding: 0;margin: 0;}
    #line-top>ul>li>ul{display: none;position: absolute;left: -3px;top: 29px;background: #232323;padding: 0;margin: 0;}
    #line-top>ul>li:hover>ul{display: block;}
    #line-top>ul>li>ul>li{list-style-type: none;padding: 4px;border: 1px solid #fff;}
    #line-top>ul>li>ul>li a{color: #fff;}
    #line-top .plus{background: #a5ca38;}
    #line-top .plus:hover{background: #8fb12c;}
    #line-top i i{font-size: 0.5em}
    #line-top>ul>li.first{background: #F44336;}
    #line-top>ul>li.first a:hover{background: #f33022;}
    #line-top>ul>li.last{background: #00b6f7;}
    #line-top>ul>li.last a:hover{background: #2196F3;}
    #line-top>ul>li.first a , #line-top ul   li.last a{ font-size: 1.5em;}
    @endif
    #line-left svg path, #line-left svg rect{fill: #fff}
</style>
