</div>
<div class="account__sidebar">
    <div class="account__sidebar-inner">
        <?
        $userId = $USER->GetID();

        $manager = GetManagerByUserId($userId);

        if ($manager) {
            ?>
            <div class="account-support">
                <div class="account-support__photo">
                    <img src="<?= $manager['PERSONAL_PHOTO']['SRC'] ?>" alt="">
                </div>
                <div class="account-support__about">
                    Менеджер по направлению<br>
                    <b><?= $manager["LAST_NAME"] ?> <?= $manager["NAME"] ?></b>
                </div>
                <div class="account-support__contacts formatted-text">
                    <p>
                        <a href="<?= $manager['EMAIL'] ?>"><?= $manager['EMAIL'] ?></a><br>
                        <a href="skype:<?= $manager['UF_SKYPE'] ?>?chat"><span><?= $manager['UF_SKYPE'] ?></span></a><br>
                        <?
                        if ($manager['PERSONAL_PHONE']) {
                            ?><a href="tel:<?= $manager['PERSONAL_PHONE'] ?>">
                            <?= $manager['PERSONAL_PHONE'] ?>
                            </a><br>
                            <?
                        }
                        if ($manager['PERSONAL_MOBILE']) {
                            ?><a href="tel:<?= $manager['PERSONAL_MOBILE'] ?>">
                            <?= $manager['PERSONAL_MOBILE'] ?>
                            </a>
                            <?
                        }
                        ?>
                    </p>
                </div>
            </div>
            <?
        }
        ?>
    </div>
</div>
</div>
</div>

</div>
</div>
</div>