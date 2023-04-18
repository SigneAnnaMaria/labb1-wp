<!-- Hämtar innehåll i header.php -->
<?php
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                        <?php the_post_thumbnail('medium_large'); ?>
                        <h2 class="title">
                            <!-- Hämtar permalänk och titel för nuvarande post -->
                            <a href="<?php get_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <ul class="meta">
                            <li>
                                <!-- Hämtar datum -->
                                <i class="fa fa-calendar"></i> <?php the_time('j F, Y'); ?>
                            </li>
                            <li>
                                <!-- Hämtar författare -->
                                <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                            </li>
                            <li>
                                <!-- Hämtar kategori -->
                                <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                            </li>
                        </ul>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
                        <p>Integer quis eros at urna pulvinar mollis eget quis ex. Nam fringilla tellus at ligula consequat, sed sagittis ipsum ultricies. Nunc pretium bibendum enim id iaculis. Nam sed leo non sem aliquam imperdiet dictum vitae magna. Phasellus ac accumsan dolor, quis congue mauris. Maecenas vehicula, arcu sed congue euismod, mi urna rhoncus nunc, et feugiat arcu tellus vitae odio. Sed luctus vel lorem vel dictum. Suspendisse potenti. Proin vel efficitur ex. Suspendisse scelerisque rutrum mattis. In sed laoreet augue, non maximus ante. Nam a rhoncus ligula. Aliquam at aliquet lorem. Suspendisse non risus tincidunt, gravida augue non, fringilla libero.</p>
                        <p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
                        <p>Duis hendrerit sit amet nibh ac mattis. Integer tincidunt lacus sit amet tellus ullamcorper, eget pulvinar ligula luctus. Vivamus viverra nisl eu lobortis imperdiet. Sed rhoncus vulputate nunc et pulvinar. Aliquam dignissim efficitur condimentum. Nulla in lacus sed arcu ornare congue ut ut quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu condimentum massa. Vestibulum hendrerit bibendum orci, non facilisis tellus pharetra eu. Donec molestie eget ante vestibulum dictum. Phasellus sed efficitur quam. In feugiat magna mauris. Praesent tempus dignissim nunc. Aenean eu sollicitudin ipsum. Vivamus quis venenatis felis.</p>
                        <p>Proin imperdiet imperdiet lacus, eu dignissim nunc rutrum sit amet. Proin purus dui, tempor a mi at, congue ultrices nibh. Nulla in turpis et turpis porttitor blandit sed vitae quam. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in dui at lacus molestie varius sit amet eu nibh. Donec dolor massa, sollicitudin vitae urna dignissim, porta ornare velit. Nunc non tellus elit. Suspendisse ut risus eu sem sagittis sodales. Sed sed lacinia turpis. Proin nec ex ante. Nulla quis est laoreet, aliquam eros eget, venenatis sem. Morbi nulla dui, bibendum eget lacinia et, placerat ac sapien. Morbi tincidunt blandit erat ut accumsan.</p>
                    </article>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <div>
                                        <!-- Hämtar sökfält -->
                                        <?php get_search_form(); ?>
                                    </div>
                                </form>
                                <?php
                                // Skapat en widget i functions.php och hämtar dynamic sidebar som går att redigera i wp-panel
                                dynamic_sidebar('sidebar-1');
                                ?>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<!-- Hämtar innehåll i footer.php -->
<?php
get_footer();
?>