<?php

return [
  "blog"      => [
    "name"    => "LARAPRESS",
    "infos"   => "No infos for this blog",
    "url"     => "http://localhost:8000/"
  ],
  "themes"    => [
    "path"    => "app/content/themes",
    // if no current we use 'default'
    "current" => "default"
  ],
  "plugins"   => [
    "path"    => "app/content/plugins",
    //all plugins in the directory are shown, and only active ones are loaded
    "active"  => [
      
    ]
  ],
  "hooks"     =>  [
    "page.index"
  ]
];


/*
 * Hooks
 *
 * page.index : Home page
 */
