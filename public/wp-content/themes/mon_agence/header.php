<DOCTYPE html>
    <?php $titrePage = "Ouvrons ensemble les portes de l'enchantement digital.";
    ?>
    <html <?php language_attributes(); ?>>

    <head>
        <title><?php bloginfo('name');
                if (is_home() || is_front_page()) { ?>
                | <?php bloginfo("description");
                } else { ?>
                | <?php wp_title("", true);
                } ?>
        </title>
        <meta charset='<?php bloginfo("charset") ?>'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/liaisons/css/styles.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="entete">
            <?php if (has_nav_menu("principal")) { ?>
                <nav id="principal " class="menu__principal">
                    <div>
                        <svg class="logo" width="76" height="76" viewBox="0 0 306 306" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_257_860)">
                                <path d="M153 306C237.5 306 306 237.5 306 153C306 68.5004 237.5 0 153 0C68.5004 0 0 68.5004 0 153C0 237.5 68.5004 306 153 306Z" fill="white"/>
                                <mask id="mask0_257_860" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="40" y="46" width="226" height="186">
                                    <path d="M265.622 46H40V231.123H265.622V46Z" fill="white"/>
                                </mask>
                                <g mask="url(#mask0_257_860)">
                                    <path d="M230.545 173.3C223.903 140.966 208.589 104.655 191.999 85.5473C175.754 66.8348 144.428 50.3503 111.818 50.3503C79.2089 50.3503 76.9245 72.0382 76.9245 72.0382C76.9245 72.0382 91.745 67.0322 105.973 71.6575C120.195 76.2827 126.872 96.5535 124.362 115.4C122.669 128.105 105.466 151.507 90.8566 169.415C62.7385 175.112 44.3362 184.567 44.3362 195.277C44.3362 212.671 92.9013 226.78 152.811 226.78C212.721 226.78 261.286 212.678 261.286 195.277C261.286 186.732 249.561 178.983 230.538 173.307L230.545 173.3Z" fill="url(#paint0_linear_257_860)" stroke="black" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M144.139 70.0499C146.05 74.5976 146.945 77.1006 148.574 82.5579C153.502 82.1066 155.97 81.888 160.905 81.4438C156.999 86.1608 154.99 88.1491 150.936 91.4135C152.205 96.7086 153.22 102.145 153.982 107.538C150.357 102.116 148.468 99.7615 144.625 95.7709C140.515 98.1399 138.442 98.9648 134.317 99.8885C136.136 96.5041 137.003 94.5863 138.611 90.3066C134.677 87.2113 132.66 86.0268 128.641 84.3769C133.57 83.9257 136.038 83.7071 140.973 83.2629C142.411 78.4261 143.06 75.7821 144.16 70.064L144.139 70.0499Z" fill="#F1FFFF"/>
                                    <path d="M100.96 61.2718C104.69 60.5808 106.601 60.6654 110.133 61.5327C111.769 59.8264 112.721 59.0367 114.836 57.6759C115.287 60.052 115.386 61.2365 115.344 63.5421C118.531 65.2695 119.983 66.4752 122.246 69.4435C119.391 67.7796 117.868 67.3495 115.048 67.0393C114.716 69.2532 114.427 70.3249 113.644 72.3414C113.059 70.198 112.509 69.0769 110.874 67.1098C108.307 67.4905 107.137 67.9629 105.24 69.1827C106.002 67.1591 106.53 66.1579 107.842 64.2965C105.564 62.6537 104.154 61.9628 100.953 61.2718H100.96Z" fill="#F1FFFF"/>
                                    <path d="M188.798 87.6061C191.082 93.2044 191.801 96.0529 192.556 101.545C197.4 104.359 199.783 106.135 204.119 110.429C199.628 109.858 197.4 109.752 193.035 109.879C192.93 115.146 192.521 117.677 191.188 122.345C189.898 117.304 188.918 114.871 186.386 110.387C182.142 110.93 180.069 111.36 176.085 112.537C178.652 109.259 179.829 107.503 181.93 103.802C178.701 99.7756 176.805 97.9495 172.56 94.8542C177.453 95.3901 179.977 95.9753 184.955 97.8931C186.753 93.9588 187.536 91.8859 188.798 87.6061Z" fill="#F1FFFF"/>
                                    <path d="M158.945 124.368C160.517 130.284 161.476 133.288 163.267 139.302H177.249C172.884 143.017 170.522 144.879 165.939 148.602C167.575 154.616 168.323 157.619 169.218 163.528C165.53 159.876 163.38 158.028 158.952 154.327C154.524 158.028 152.374 159.869 148.686 163.528C149.575 157.619 150.329 154.609 151.965 148.602C147.375 144.886 145.013 143.025 140.656 139.302H154.637C156.421 133.288 157.387 130.284 158.959 124.368H158.945Z" fill="#F1FFFF"/>
                                    <path d="M196.962 146.381C201.27 149.73 203.4 151.81 207.475 156.766C212.107 153.869 216.655 150.449 220.752 146.832C218.601 153.149 216.31 159.086 213.588 165.185C217.099 170.543 219.828 176.219 222.564 181.994C216.972 178.694 214.152 177.235 208.462 174.703C204.993 180.414 203.146 182.903 199.339 187.134C199.776 180.668 199.832 177.467 199.649 171.171C193.924 169.119 191.047 168.294 185.265 167.025C190.821 165.375 193.592 164.282 199.071 161.533C198.521 155.356 198.091 152.317 196.962 146.374V146.381Z" fill="#F1FFFF"/>
                                    <path d="M157.302 188.643C159.523 193.268 160.778 195.559 163.556 200.114C170.29 199.931 177.009 199.437 183.7 198.655C178.736 201.778 173.434 204.641 168.111 207.108C171.234 211.607 172.927 213.828 176.593 218.206C170.064 216.373 163.613 214.237 157.302 211.762C150.985 214.237 144.541 216.38 138.012 218.206C141.678 213.828 143.377 211.6 146.494 207.108C141.17 204.648 135.875 201.785 130.905 198.655C137.596 199.444 144.315 199.931 151.048 200.114C153.826 195.566 155.074 193.261 157.302 188.643Z" fill="#F1FFFF"/>
                                    <path d="M113.842 161.779C113.616 168.287 113.426 171.425 112.897 177.446C118.531 179.448 121.492 180.591 127.873 183.009C122.853 184.758 117.24 185.991 111.945 186.513C111.247 192.231 110.824 194.967 109.858 200.177C106.298 194.382 104.711 191.724 101.813 186.95C96.3985 186.887 90.6028 186.125 85.3571 184.8C90.4336 183.961 92.9366 182.995 97.5971 180.076C95.0307 175.951 93.8814 174.16 91.7168 171.15C96.6735 172.214 99.1765 172.92 104.472 174.598C108.688 170.438 110.62 167.85 113.849 161.786L113.842 161.779Z" fill="#F1FFFF"/>
                                </g>
                                <path d="M127.44 261.48C127.44 258.173 126.253 256.52 123.88 256.52C122.813 256.52 121.88 256.8 121.08 257.36C120.307 257.893 119.92 258.653 119.92 259.64C119.92 260.253 120.08 260.68 120.4 260.92C120.72 261.133 121.253 261.333 122 261.52C122.747 261.707 123.28 261.92 123.6 262.16C123.92 262.4 124.08 262.827 124.08 263.44C124.08 264.027 123.88 264.493 123.48 264.84C123.08 265.16 122.587 265.32 122 265.32C120.96 265.32 119.987 264.84 119.08 263.88C118.173 262.893 117.72 261.613 117.72 260.04C117.72 258.44 118.373 256.893 119.68 255.4C120.987 253.907 122.653 253.16 124.68 253.16C126.707 253.16 128.227 253.773 129.24 255C130.253 256.227 130.76 257.853 130.76 259.88C130.76 263.08 129.613 266.853 127.32 271.2C125.027 275.547 122.747 278.68 120.48 280.6C120 281.027 119.52 281.24 119.04 281.24C118.187 281.24 117.547 280.72 117.12 279.68C117.04 279.52 116.92 279.2 116.76 278.72C116.147 276.853 115.613 275.293 115.16 274.04C113.32 277.027 111.573 279.213 109.92 280.6C109.44 281.027 108.96 281.24 108.48 281.24C107.6 281.24 106.96 280.72 106.56 279.68C106.507 279.52 106.253 278.787 105.8 277.48C105.347 276.173 104.8 274.6 104.16 272.76C103.52 270.893 102.96 269.293 102.48 267.96C102 266.627 101.493 265.253 100.96 263.84C100.427 262.4 100.013 261.307 99.72 260.56C99.4533 259.813 99.1867 259.053 98.92 258.28C98.44 256.92 98.2 255.933 98.2 255.32C98.2 254.707 98.3467 254.2 98.64 253.8C98.9333 253.373 99.3467 253.16 99.88 253.16C100.867 253.16 101.56 253.707 101.96 254.8C102.04 254.987 102.227 255.613 102.52 256.68C104.067 261.907 106.4 268.893 109.52 277.64C111.28 275.773 112.827 273.587 114.16 271.08C113.893 270.413 113.493 269.333 112.96 267.84C112.453 266.32 111.92 264.813 111.36 263.32C110.827 261.8 110.413 260.68 110.12 259.96C109.853 259.213 109.6 258.493 109.36 257.8C108.96 256.68 108.76 255.827 108.76 255.24C108.76 254.653 108.907 254.16 109.2 253.76C109.493 253.36 109.907 253.16 110.44 253.16C111.427 253.16 112.12 253.707 112.52 254.8C112.6 254.987 112.787 255.613 113.08 256.68C114.627 261.907 116.96 268.893 120.08 277.64C121.947 275.667 123.64 273.213 125.16 270.28C126.68 267.32 127.44 264.387 127.44 261.48ZM162.401 261.48C162.401 258.173 161.214 256.52 158.841 256.52C157.774 256.52 156.841 256.8 156.041 257.36C155.268 257.893 154.881 258.653 154.881 259.64C154.881 260.253 155.041 260.68 155.361 260.92C155.681 261.133 156.214 261.333 156.961 261.52C157.708 261.707 158.241 261.92 158.561 262.16C158.881 262.4 159.041 262.827 159.041 263.44C159.041 264.027 158.841 264.493 158.441 264.84C158.041 265.16 157.548 265.32 156.961 265.32C155.921 265.32 154.948 264.84 154.041 263.88C153.134 262.893 152.681 261.613 152.681 260.04C152.681 258.44 153.334 256.893 154.641 255.4C155.948 253.907 157.614 253.16 159.641 253.16C161.668 253.16 163.188 253.773 164.201 255C165.214 256.227 165.721 257.853 165.721 259.88C165.721 263.08 164.574 266.853 162.281 271.2C159.988 275.547 157.708 278.68 155.441 280.6C154.961 281.027 154.481 281.24 154.001 281.24C153.148 281.24 152.508 280.72 152.081 279.68C152.001 279.52 151.881 279.2 151.721 278.72C151.108 276.853 150.574 275.293 150.121 274.04C148.281 277.027 146.534 279.213 144.881 280.6C144.401 281.027 143.921 281.24 143.441 281.24C142.561 281.24 141.921 280.72 141.521 279.68C141.468 279.52 141.214 278.787 140.761 277.48C140.308 276.173 139.761 274.6 139.121 272.76C138.481 270.893 137.921 269.293 137.441 267.96C136.961 266.627 136.454 265.253 135.921 263.84C135.388 262.4 134.974 261.307 134.681 260.56C134.414 259.813 134.148 259.053 133.881 258.28C133.401 256.92 133.161 255.933 133.161 255.32C133.161 254.707 133.308 254.2 133.601 253.8C133.894 253.373 134.308 253.16 134.841 253.16C135.828 253.16 136.521 253.707 136.921 254.8C137.001 254.987 137.188 255.613 137.481 256.68C139.028 261.907 141.361 268.893 144.481 277.64C146.241 275.773 147.788 273.587 149.121 271.08C148.854 270.413 148.454 269.333 147.921 267.84C147.414 266.32 146.881 264.813 146.321 263.32C145.788 261.8 145.374 260.68 145.081 259.96C144.814 259.213 144.561 258.493 144.321 257.8C143.921 256.68 143.721 255.827 143.721 255.24C143.721 254.653 143.868 254.16 144.161 253.76C144.454 253.36 144.868 253.16 145.401 253.16C146.388 253.16 147.081 253.707 147.481 254.8C147.561 254.987 147.748 255.613 148.041 256.68C149.588 261.907 151.921 268.893 155.041 277.64C156.908 275.667 158.601 273.213 160.121 270.28C161.641 267.32 162.401 264.387 162.401 261.48ZM197.362 261.48C197.362 258.173 196.175 256.52 193.802 256.52C192.735 256.52 191.802 256.8 191.002 257.36C190.229 257.893 189.842 258.653 189.842 259.64C189.842 260.253 190.002 260.68 190.322 260.92C190.642 261.133 191.175 261.333 191.922 261.52C192.669 261.707 193.202 261.92 193.522 262.16C193.842 262.4 194.002 262.827 194.002 263.44C194.002 264.027 193.802 264.493 193.402 264.84C193.002 265.16 192.509 265.32 191.922 265.32C190.882 265.32 189.909 264.84 189.002 263.88C188.095 262.893 187.642 261.613 187.642 260.04C187.642 258.44 188.295 256.893 189.602 255.4C190.909 253.907 192.575 253.16 194.602 253.16C196.629 253.16 198.149 253.773 199.162 255C200.175 256.227 200.682 257.853 200.682 259.88C200.682 263.08 199.535 266.853 197.242 271.2C194.949 275.547 192.669 278.68 190.402 280.6C189.922 281.027 189.442 281.24 188.962 281.24C188.109 281.24 187.469 280.72 187.042 279.68C186.962 279.52 186.842 279.2 186.682 278.72C186.069 276.853 185.535 275.293 185.082 274.04C183.242 277.027 181.495 279.213 179.842 280.6C179.362 281.027 178.882 281.24 178.402 281.24C177.522 281.24 176.882 280.72 176.482 279.68C176.429 279.52 176.175 278.787 175.722 277.48C175.269 276.173 174.722 274.6 174.082 272.76C173.442 270.893 172.882 269.293 172.402 267.96C171.922 266.627 171.415 265.253 170.882 263.84C170.349 262.4 169.935 261.307 169.642 260.56C169.375 259.813 169.109 259.053 168.842 258.28C168.362 256.92 168.122 255.933 168.122 255.32C168.122 254.707 168.269 254.2 168.562 253.8C168.855 253.373 169.269 253.16 169.802 253.16C170.789 253.16 171.482 253.707 171.882 254.8C171.962 254.987 172.149 255.613 172.442 256.68C173.989 261.907 176.322 268.893 179.442 277.64C181.202 275.773 182.749 273.587 184.082 271.08C183.815 270.413 183.415 269.333 182.882 267.84C182.375 266.32 181.842 264.813 181.282 263.32C180.749 261.8 180.335 260.68 180.042 259.96C179.775 259.213 179.522 258.493 179.282 257.8C178.882 256.68 178.682 255.827 178.682 255.24C178.682 254.653 178.829 254.16 179.122 253.76C179.415 253.36 179.829 253.16 180.362 253.16C181.349 253.16 182.042 253.707 182.442 254.8C182.522 254.987 182.709 255.613 183.002 256.68C184.549 261.907 186.882 268.893 190.002 277.64C191.869 275.667 193.562 273.213 195.082 270.28C196.602 267.32 197.362 264.387 197.362 261.48Z" fill="black"/>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_257_860" x1="152.811" y1="50.3503" x2="152.811" y2="226.773" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7600AD"/>
                                    <stop offset="1" stop-color="#C95DFB"/>
                                </linearGradient>
                                <clipPath id="clip0_257_860">
                                    <rect width="306" height="306" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <div id="hamburgerlogo">
                            <span></span>
                        </div>
                    </div>
                    <div class="nav-principale">
                        <?php wp_nav_menu(array("theme_location" => "principal")); ?>
                    </div>
                </nav>
            <?php } ?>
            <h1 class="entete__titre"><?php echo $titrePage ?></h1>
            <h2 class="entete__slogan"><?php bloginfo("description") ?></h2>
        </header>
        <div class="contenu">