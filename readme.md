## Hooks

If you need to get some variables on your templates, you can use hooks to add them.
You can use hooks to store links to assets too.

```
App::make('Hook').addHook( 'page.index', 'posts', Post::all() );
```

List of hooks:

- page.index  : index page of your website.
- page.single : single post page.


TODO:

- remove the ViewData class and use the fire method return value.
