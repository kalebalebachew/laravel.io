<?php

if (! function_exists('active')) {
    /**
     * Sets the menu item class for an active route.
     */
    function active($routes, $class = 'active'): string
    {
        return call_user_func_array([app('router'), 'is'], (array) $routes) ? $class: '';
    }
}

if (! function_exists('md_to_html')) {
    /**
     * Convert Markdown to HTML.
     */
    function md_to_html(string $markdown): string
    {
        return app(App\Markdown\Converter::class)->toHtml($markdown);
    }
}

if (! function_exists('route_to_reply_able')) {
    /**
     * Returns the route for the replyAble.
     */
    function route_to_reply_able(App\Replies\ReplyAble $replyAble): string
    {
        if ($replyAble instanceof App\Forum\Thread) {
            return route('thread', $replyAble->slug());
        }
    }
}