<?php


namespace HubSpot;


final class SearchOptions
{
    public ?string $query = null;
    public ?int $limit = null;
    public ?int $offset = null;
    public ?string $language = null;
    public ?bool $match_prefix = null;
    public ?bool $autocomplete = null;
    public ?float $popularity_boost = null;
    public ?float $boost_limit = null;
    public ?float $min_score = null;
    public ?string $boost_recent = null;
    public ?int $table_id = null;
    public ?string $hubdb_query = null;
    public ?string $key_string = null;
    public ?array $domain = null;
    public ?array $type = null;
    public ?array $path_prefix = null;
    public ?array $property = null;
    public ?string $length = null;
    public ?array $group_id = null;

    public function addSitePage(): void
    {
        if(is_array($this->type)) {
           $this->type[] = 'SITE_PAGE';
        }else{
            $this->type = ['SITE_PAGE'];
        }
    }

    public function addKnowledgeArticle(): void
    {
        if(is_array($this->type)) {
            $this->type[] = 'KNOWLEDGE_ARTICLE';
        }else{
            $this->type = ['KNOWLEDGE_ARTICLE'];
        }
    }

    public function addLandingPage(): void
    {
        if(is_array($this->type)) {
            $this->type[] = 'LANDING_PAGE';
        }else{
            $this->type = ['LANDING_PAGE'];
        }
    }

    public function addBlogPost(): void
    {
        if(is_array($this->type)) {
            $this->type[] = 'BLOG_POST';
        }else{
            $this->type = ['BLOG_POST'];
        }
    }

    public function addListingPage(): void
    {
        if(is_array($this->type)) {
            $this->type[] = 'LISTING_PAGE';
        }else{
            $this->type = ['LISTING_PAGE'];
        }
    }

    public function searchTitle(): void
    {
        if(is_array($this->property)) {
            $this->property[] = 'title';
        }else{
            $this->property = ['title'];
        }
    }

    public function searchDescription(): void
    {
        if(is_array($this->property)) {
            $this->property[] = 'description';
        }else{
            $this->property = ['description'];
        }
    }

    public function searchHtml(): void
    {
        if(is_array($this->property)) {
            $this->property[] = 'html';
        }else{
            $this->property = ['html'];
        }
    }

    public function shortDescription(): void
    {
        $this->length = 'SHORT';
    }

    public function longDescription(): void
    {
        $this->length = 'LONG';
    }
}