<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="<?php echo site_url('home') ?>"><?php echo SITE_NAME ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home')?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('about')?>">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('galery')?>">Galery</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('faq')?>">FAQ</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="<?php echo site_url('bloghome')?>">Blog Home</a></li>
                                    <li><a class="dropdown-item" href="<?php echo site_url('blogpost')?>">Blog Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>