<?php

foreach (new DirectoryIterator('AKWF') as $dir) {
    if ($dir->isDir() && !$dir->isDot()) {
        echo '<optgroup label="' . $dir .'">' . PHP_EOL;
        foreach (new DirectoryIterator($dir->getRealPath()) as $file) {
            if ($file->getExtension()=='wav') {
                echo '<option value="AKWF/'.$dir.'/'.$file.'">'.$file.'</option>' . PHP_EOL;
            }
        }
        echo '</optgroup>' . PHP_EOL;
    }
}
