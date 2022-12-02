<?php

namespace Web\Inc\SeoGenerator;

class TagsGenerator
{
    public string $title;
    public string $desc;
    public string $keywords;
    public string $robots;
    public string $language;
    public int|bool $revisit_after;
    public string $author;

    public function __construct(array $metatags)
    {
        $this->title = $metatags['title'];
        $this->desc = $metatags['desc'];
        $this->keywords = $metatags['keywords'];
        $this->robots = $metatags['robots'];
        $this->language = $metatags['language'];
        $this->revisit_after = $metatags['revisit_after'];
        $this->author = $metatags['author'];
    }

    public function getTags()
    {
        $code = '';
        if ($this->title) {
            $code .= '<meta name="title" content="' . $this->title . '">';
        }
        if ($this->desc) {
            $code .= '<meta name="description" content="' . $this->desc . '">';
        }
        if ($this->keywords) {
            $code .= '<meta name="keywords" content="' . $this->keywords . '">';
        }
        if ($this->robots) {
            $code .= '<meta name="robots" content="' . $this->robots . '">';
        }
        if ($this->revisit_after) {
            $code .= '<meta name="revisit-after" content="' . $this->revisit_after . ' days">';
        }
        if ($this->author) {
            $code .= '<meta name="author" content="' . $this->author . '">';
        }
        return $code;
    }

    public function theTags()
    {
        if ($this->title) {
            echo '<meta name="title" content="' . $this->title . '">';
        }
        if ($this->desc) {
            echo '<meta name="description" content="' . $this->desc . '">';
        }
        if ($this->keywords) {
            echo '<meta name="keywords" content="' . $this->keywords . '">';
        }
        if ($this->robots) {
            echo '<meta name="robots" content="' . $this->robots . '">';
        }
        if ($this->revisit_after) {
            echo '<meta name="revisit-after" content="' . $this->revisit_after . ' days">';
        }
        if ($this->author) {
            echo '<meta name="author" content="' . $this->author . '">';
        }
    }
}
