<?php
/**
 * bootstrap 4 alert dismissible component. see the link for more info
 *
 * @var string type     primary | secondary | success | warning | danger | info | light | dark
 * @link https://getbootstrap.com/docs/4.0/components/alerts/#link-color
 */
?>

<div class="alert alert-{{ $type ?? 'success' }} alert-dismissible fade show" role="alert">
    {{ $slot }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>