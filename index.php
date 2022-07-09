<?
$domain = $_SERVER['HTTP_HOST'];
$version = 获取npm包最新版本('crazyfan-web');
switch ($domain) {
    case 'elysia.cf':
        $text = "<!-- PHP调试参数 \n \$domain:$domain \n \$version:$version -->\n";
        echo $text . file_get_contents('https://npm.elemecdn.com/crazyfan-web@' . $version . '/elysia/index.html');
        break;
    case 'priestess.cf':
        $text = "<!-- PHP调试参数 \n \$domain:$domain \n \$version:$version -->\n";
        echo $text . file_get_contents('https://npm.elemecdn.com/crazyfan-web@' . $version . '/priestess/index.html');
        break;
    default:
        $text = `<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>CrazyFan | CrazyFan</title>
    </head>
    <body>
    <h1>亲爱的，这里是CrazyFan的停靠站！</h1>
    <p>项目隶属于<a href="https://github.com/reject-knife">Reject Knife</a>项目组！</p><p>ta们是无辜的，谁都不应该独自承受这份悲哀</p>
    </body>
    </html>`;
        echo $text;
        break;
}

function 获取npm包最新版本($npm包名)
{
    $npm包信息 = file_get_contents('https://registry.npmjs.org/' . $npm包名 . '/latest');
    $npm包信息 = json_decode($npm包信息, true);
    $npm包版本 = $npm包信息['version'];
    return $npm包版本;
}
