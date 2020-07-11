<?php


namespace HubSpot;


class AuditLogOptions
{
    public ?array $object_id = null;
    public ?array $user_id = null;
    public ?\DateTime $after = null;
    public ?\DateTime $before = null;
    public ?array $sort = null;
    public ?array $event_type = null;
    public ?int $limit = null;
    public ?array $object_type = null;
}