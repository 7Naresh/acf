<?php get_header();
/**
 * Template Name: Acf Template
 */
?>

<div class="container py-5">
    <div class="row">
        <div class="col">
            <h1 class="text-center bg-light py-3 mb-4 border-bottom border-dark">Acf Fields</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Basic Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Basic Fields</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Choice Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Choice Fields</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Content Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Content Fields</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Jquery Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Jquery Fields</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Relational Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Relational Fields</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="<?php echo get_permalink( get_page_by_title( 'Layout Fields Page' ) ); ?>">
                <div
                    class="card shadow-sm d-flex justify-content-center align-items-center py-3 border border-dark acf-card">
                    <div class="card-body">
                        <h4 class="card-title text-white mb-0">Layout Fields</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php get_footer();?>