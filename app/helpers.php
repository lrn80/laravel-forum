<?php

function route_class()
{
    // 法会将当前请求的路由名称转换为 CSS 类名称 ,作用是允许我们针对某个页面做页面
    // 样式定制。在后面的章节中会用到。
    return str_replace('.', '-', Route::currentRouteName());
}
