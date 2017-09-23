<?php

namespace FileTranslator\Test;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use FileTranslator\Translators\Translator;

class Test
{

    public function test()
    {
        $translator = Translator::getTranslator(Translator::TRANSLATOR_TYPE_XML);
        var_dump($translator);
    }

}

(new Test())->test();
