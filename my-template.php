<?php
/*
Template Name: Моя Главная страница
*/
//get_header();
?>

<main id="primary" class="site-main">
<div class="container" style="background-color: antiquewhite; ">
<div class="row" style="background-color: wheat; display: flex; flex-direction: row; flex-wrap: wrap; max-width: 1200px; margin: 20px; padding: 15px">
<?php
$args = array(
'post_type' => 'custom_post_type', // замените на ваш тип записи
'posts_per_page' => 10, // количество выводимых записей
);
$query = new WP_Query($args);

if ($query->have_posts()) {
while ($query->have_posts()) {
    $query->the_post();
    ?>
    <div style="max-width: 300px; margin: 20px; padding: 15px; background-color: white; border-radius: 25px">
        <article>
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
<!--            <p>--><?php //the_date(); ?><!--</p>-->
            <button onclick="showAlert('<?php the_title(); ?>')">CLICK ME</button>
        </article>
        <script>
            function showAlert(title) {
                alert('Вы кликнули на запись с заголовком ' + title);
            }
        </script>
    </div>
    <?php
}
wp_reset_postdata();
} else {
echo 'Записей не найдено.';
}
?>
</div>
</div>
</main>

<?php get_footer(); ?>