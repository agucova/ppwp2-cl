<?php
/**
 * The template part for displaying the drawer navigation
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

?>

<div class="mdl-layout__drawer">
    <button id="drawer_close_button" class="mdl-button mdl-js-button mdl-button--icon">
        <i class="material-icons">close</i>
    </button>
    <span class="mdl-layout-title">
        <a id="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <span>partido</span>pirata<br>
            <span class="country">chile</span>
        </a>
    </span>

    <div class="pir-header-extra" style="text-align: center; margin-top: 16px;">
        <a href="<?php echo(get_page_by_slug("join-us")); ?>" class="pir-button-join mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Únete
        </a>

        <a href="<?php echo(get_page_by_slug("donate")); ?>"  class="pir-button-donate mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Dona
        </a>

        <a href="/miembros"  class="pir-button-members mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Miembros
        </a>

    </div>

    <?php
    $args = array(
        'theme_location' => 'primary',
        'container' => 'ul',
        'menu_class' => 'mdl-navigation',
        'walker' => new PPWPT2_Drawer_Walker()
    );

    if (has_nav_menu('drawer')) {
        wp_nav_menu($args);
    }
    ?>

</div>
