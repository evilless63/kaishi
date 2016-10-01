<div class="sidebar">
                <div class="productMenu">
                    <div class="productMenuHeader">Меню</div>
                    <ul>
                    <?php 
                    $arrayAclass = array('sushi', 'inari', 'rolls', 'hotrolls', 'set', 'gunkan', 'zakuski', 'pizza', 'drink');
                    $count = 0;
                    foreach ($categories as $categoryItem): ?>
                        <li>
                        <a class="<?php echo $arrayAclass[$count]; ?>" href="/category/<?php echo $categoryItem['id']; ?>"
                                           class="<?php if ($categoryId == $categoryItem['id']) echo 'catalogActive'; ?>">                                                                                    
                               <?php echo $categoryItem['name']; ?>
                        </a>
                        </li>
                    <?php 
                    $count++ ;   
                    endforeach; ?>   
                    </ul>
                </div>
                <div class="themeSets">
                    <div class="themeSetsHeader">
                        <a href="/thematic">Тематические наборы</a>
                    </div>
                    <div class="themeSetsBlock">
                        <div class="themeSetsBlockHeader">
                            <a href="">Романтический ужин</a>
                        </div>
                        <a href="thematic_profile.html" class="themeSetsBlockImage">
                            <div class="themeSetsBlockImageCover">
                                <span>Купить</span>
                            </div>
                            <img src="/template/images/user/themeSetsBlockImage.jpg" alt="Романтический ужин">
                            <p>1150 р.</p>
                        </a>
                        <p class="themeSetsBlockDesc">
                            Принцип работы набора очень прост. В корпус вставляется поддон нужной 
                        </p>
                    </div>
                    <div class="themeSetsBlock">
                        <div class="themeSetsBlockHeader">
                            <a href="thematic_profile.html">Романтический ужин</a>
                        </div>
                        <a href="" class="themeSetsBlockImage">
                            <div class="themeSetsBlockImageCover">
                                <span>Купить</span>
                            </div>
                            <img src="/template/images/user/themeSetsBlockImage.jpg" alt="Романтический ужин">
                            <p>1150 р.</p>
                        </a>
                        <p class="themeSetsBlockDesc">
                            Принцип работы набора очень прост. В корпус вставляется поддон нужной 
                        </p>
                    </div>
                </div>
            </div>