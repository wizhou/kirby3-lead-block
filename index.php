<?php

Kirby::plugin('wizhou/kirby3-lead-block', [
  'blueprints' => [
    'blocks/lead' => __DIR__ . '/blueprints/blocks/lead.yml'
  ],
  'snippets' => [
    'blocks/lead' => __DIR__ . '/snippets/blocks/lead.php'
  ]
]);
