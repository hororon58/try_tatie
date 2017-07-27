/**
 * 指定したディレクトリとそのサブディレクトリのファイルを表示する
 * @param string $path ディレクトリのパス
 */
function showFiles($path) {
    $dir = new DirectoryIterator($path);
    $dirs = array();
    foreach ($dir as $file) {
        if ($file->isDot()) //'.'と'..'は表示しない
            continue;
        if ($file->isDir())
            $dirs[] = $file->getPathname();
        if ($file->isFile())
            echo $file->getPathname(), PHP_EOL;
    }
    //サブディレクトリのファイルを表示する
    foreach ($dirs as $dir) {
        showFiles($dir);
    }
}

//処理したいディレクトリのパス
$path = dirname("gazo");

//指定したディレクトリとそのサブディレクトリのファイルを表示する
showFiles($path);
