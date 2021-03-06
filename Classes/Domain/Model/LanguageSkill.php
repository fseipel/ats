<?php
namespace PAGEmachine\Ats\Domain\Model;

use SJBR\StaticInfoTables\Domain\Model\Language;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/*
 * This file is part of the PAGEmachine ATS project.
 */

/**
 * LanguageSkill model - connects languages and their knowledge level to applications
 * @codeCoverageIgnore
 */
class LanguageSkill extends AbstractEntity implements CloneableInterface
{
    /**
     * @var SJBR\StaticInfoTables\Domain\Model\Language|null $language
     */
    protected $language = null;
    
    /**
     * @return SJBR\StaticInfoTables\Domain\Model\Language|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    
    /**
     * @param SJBR\StaticInfoTables\Domain\Model\Language| null $language
     * @return void
     */
    public function setLanguage(Language $language = null)
    {
        $this->language = $language;
    }


    /**
     * @var string $textLanguage
     */
    protected $textLanguage;
    
    /**
     * @return string
     */
    public function getTextLanguage()
    {
        return $this->textLanguage;
    }
    
    /**
     * @param string $textLanguage
     * @return void
     */
    public function setTextLanguage($textLanguage)
    {
        $this->textLanguage = $textLanguage;
    }


    /**
     * @var int $level
     */
    protected $level;
    
    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
    
    /**
     * @param int $level
     * @return void
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }
}
