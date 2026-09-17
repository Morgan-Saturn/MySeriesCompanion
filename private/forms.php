<?php
function echo_form(string $form_type, bool $has_duree, ?int $parent_id) {
        $titles = [
        'serie'   => 'Ajouter une série',
        'saison'  => 'Ajouter une saison',
        'episode' => 'Ajouter un épisode',
    ];

    $title = $titles[$form_type] ?? 'Ajouter';
?>
    <form
        class="serie card w-full max-w-2xl bg-base-100 shadow-xl"
        method="post"
        action=""
    >
        <div class="card-body gap-5">

            <h2 class="card-title text-2xl"><?= $title ?></h2>

            <div class="form-control w-full">
                <label class="label" for="ajouter_serie">
                    <span class="label-text font-semibold">
                        Nom
                        <span class="text-error">*</span>
                    </span>
                </label>

                <input
                    type="text"
                    id="ajouter_serie"
                    name="nom"
                    maxlength="255"
                    placeholder="Saisissez le titre"
                    class="input input-bordered w-full focus:input-accent"
                    required
                />
            </div>

            <div class="form-control w-full">
                <label class="label" for="resume_serie">
                    <span class="label-text font-semibold">
                        Résumé
                    </span>
                </label>

                <textarea
                    id="resume_serie"
                    name="resume"
                    maxlength="255"
                    placeholder="Saisissez un résumé"
                    class="textarea textarea-bordered w-full h-32 focus:textarea-accent"
                ></textarea>

                <label class="label">
                    <span class="label-text-alt">
                        255 caractères maximum
                    </span>
                </label>
            </div>

            <div class="form-control w-full">
                <label class="label" for="vignette_serie">
                    <span class="label-text font-semibold">
                        Vignette
                    </span>
                </label>

                <input
                    type="url"
                    id="vignette_serie"
                    name="vignette"
                    maxlength="255"
                    placeholder="https://exemple.com/image.jpg"
                    class="input input-bordered w-full focus:input-accent"
                />

                <label class="label">
                    <span class="label-text-alt">
                        URL d'une image
                    </span>
                </label>
            </div>

            <div class="form-control w-full">
                <label class="label" for="date_sortie_serie">
                    <span class="label-text font-semibold">
                        Date de sortie
                        <span class="text-error">*</span>
                    </span>
                </label>

                <input
                    type="date"
                    id="date_sortie_serie"
                    name="date_sortie"
                    class="input input-bordered w-full focus:input-accent"
                    required
                />
            </div>

            <?php if ($has_duree) { ?>

                <div class="form-control w-full">
                    <label class="label" for="duree_episode">
                        <span class="label-text font-semibold">
                            Durée
                        </span>
                    </label>

                    <div class="join w-full">
                        <input
                            type="number"
                            id="duree_episode"
                            name="duree"
                            min="0"
                            class="input input-bordered join-item w-full focus:input-accent"
                            placeholder="En minute"
                        />

                        <span class="btn btn-neutral join-item pointer-events-none">
                            min
                        </span>
                    </div>
                </div>

            <?php } ?>

            <div class="card-actions flex-col-reverse sm:flex-row sm:justify-end gap-2 mt-3">

                <button
                    class="btn btn-warning w-full sm:w-auto"
                    type="reset"
                >
                    Annuler
                </button>

                <button
                    class="btn btn-accent w-full sm:w-auto"
                    type="submit"
                >
                    Valider
                </button>

            </div>

            <input
                type="hidden"
                name="form_type"
                value="<?= htmlspecialchars($form_type, ENT_QUOTES, 'UTF-8') ?>"
            />

            <?php if ($parent_id !== null) { ?>
                <input
                    type="hidden"
                    name="parent_id"
                    value="<?= htmlspecialchars((string) $parent_id, ENT_QUOTES, 'UTF-8') ?>"
                />
            <?php } ?>

        </div>
    </form>
<?php
}