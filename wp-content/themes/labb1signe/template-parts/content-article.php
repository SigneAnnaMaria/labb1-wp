<div class="container">
    <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
            <h1>Blogg</h1>
            <article>
                <img src="img/washington.jpg" />
                <h2 class="title">
                    <a href="inlagg.html">Det tredje inlägget</a>
                </h2>
                <ul class="meta">
                    <li>
                        <i class="fa fa-calendar"></i><?php the_date(); ?>
                    </li>
                    <li>
                        <i class="fa fa-user"></i><?php echo get_the_author_meta('display_name'); ?>
                    </li>
                    <li>
                    <li>
                        <i class="fa fa-tag"></i>
                        <?php $categories = get_categories();
                        foreach ($categories as $index => $category) {
                            if ($index > 0) {
                                echo ', ';
                            }
                            echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                        ?>
                    </li>


                    </li>
        </div>

        <?php
        the_content();
        ?>