<?php


namespace HubSpot;


final class PageOptions
{
    public ?\DateTime $created_at = null;
    public ?\DateTime $created_after = null;
    public ?\DateTime $created_before = null;
    public ?\DateTime $updated_at = null;
    public ?\DateTime $updated_after = null;
    public ?\DateTime $updated_before = null;
    public ?array $sort = null;
    public ?array $properties = null;
    public ?string $after = null;
    public ?string $before = null;
    public ?int $limit = null;
    public ?bool $archived = null;
}