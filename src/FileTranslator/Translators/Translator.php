<?php

namespace FileTranslator\Translators;

/**
 * Translator abstract class.
 *
 * @author Beastris Bunova <bibunova@gmail.com>
 */
abstract class Translator
{
    //translator types
    const TRANSLATOR_TYPE_XML = 1;
    const TRANSLATOR_TYPE_JSON = 2;
    const TRANSLATOR_TYPE_CSV = 3;
    const TRANSLATOR_TYPE_XLS = 4;
    const TRANSLATOR_TYPE_XLSX = 5;
    //default settings
    const DEFAULT_INPUT_LANGUAGE = 'detect';
    const DEFAULT_OUTPUT_LANGUAGE = 'en';
    const DEFAULT_TRANSLATED_FILE_SUFFIX = '_' . self::DEFAULT_OUTPUT_LANGUAGE;

    protected $pathToFile;
    protected $inputLanguage = self::DEFAULT_INPUT_LANGUAGE;
    protected $outputLanguage = self::DEFAULT_OUTPUT_LANGUAGE;
    protected $translatedFileSuffix = self::DEFAULT_TRANSLATED_FILE_SUFFIX;

    /**
     * Get translator instance by type.
     * @param int $type One of the following constants: 
     * TRANSLATOR_TYPE_XML, TRANSLATOR_TYPE_JSON, TRANSLATOR_TYPE_CSV, TRANSLATOR_TYPE_XLS, TRANSLATOR_TYPE_XLSX
     * @return Translator Translator instance.
     * @throws Exception
     */
    public static function getTranslator($type)
    {
        switch ($type)
        {
            case self::TRANSLATOR_TYPE_XML:
            case self::TRANSLATOR_TYPE_JSON:
            case self::TRANSLATOR_TYPE_CSV:
            case self::TRANSLATOR_TYPE_XLS:
            case self::TRANSLATOR_TYPE_XLSX:
                echo 'This file translator is not developed yet.';
                break;

            default:
                throw new Exception('Translator type unknown.');
        }
    }

    public function setFilePath($pathToFile)
    {
        $this->pathToFile = $pathToFile;
    }

    public function setInputLanguage($inputLanguage = self::DEFAULT_INPUT_LANGUAGE)
    {
        $this->inputLanguage = $inputLanguage;
    }

    public function setOutputLanguage($outputLanguage = self::DEFAULT_OUTPUT_LANGUAGE)
    {
        $this->outputLanguage = $outputLanguage;
    }

    public function setTranslatedFileSuffix($tranlsatedFileSuffix = self::DEFAULT_TRANSLATED_FILE_SUFFIX)
    {
        $this->translatedFileSuffix = $tranlsatedFileSuffix;
    }

    public abstract function translate($pathToFile);

}
