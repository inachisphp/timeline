# Timeline Component
The timeline component is for creating timeline-style pages for use with inachis framework powered sites.

## Getting Started
```composer require inachisphp/timeline```

In order to make schema changes for storing Timeline entries, this will also modify your Doctrine migrations configuration to include:

```# config/packages/doctrine_migrations.yaml

doctrine_migrations:
# List of namespace/path pairs to search for migrations, at least one required
migrations_paths:
...
'Inachis\Component\Timeline\Migrations': '@Timeline/Migrations'```
