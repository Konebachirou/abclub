<div>
    <div class="rbt-elements-area bg-color-white " style="margin-top: 4%;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="rbt-search-with-category">
                        <div class="filter-select rbt-modern-select search-by-category">

                            <select wire:model.live="selectedDomain">
                                <option value="">All Domains</option>
                                @foreach ($domains as $domain)
                                    <option value="{{ $domain }}">{{ $domain }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="search-field">
                            <input type="text" placeholder="Search Course" wire:model.live="search">
                            <button class="rbt-round-btn serach-btn" type="submit" wire:click="search"><i
                                    class="feather-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="free" name="free" type="checkbox" value="FREELANCE"
                        wire:model.live="contractTypes">
                    <label for="free">FREELANCE</label>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="cdi" name="cdi" type="checkbox" value="CDI" wire:model.live="contractTypes">
                    <label for="cdi">CDI</label>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="cdd" name="cdd" type="checkbox" value="CDD" wire:model.live="contractTypes">
                    <label for="cdd">CDD</label>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="alte" name="alte" type="checkbox" value="Alternance"
                        wire:model.live="contractTypes">
                    <label for="alte">Alternance</label>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="stage" name="stage" type="checkbox" value="Stage" wire:model.live="contractTypes">
                    <label for="stage">Stage</label>
                </p>
            </div>
            <div class="col-sm-2">
                <p class="rbt-checkbox-wrapper">
                    <input id="interim" name="interim" type="checkbox" value="Intérime"
                        wire:model.live="contractTypes">
                    <label for="interim">Intérime</label>
                </p>
            </div>
        </div>
    </div>

    <div class="wishlist_area bg-color-white" style="margin-top: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="cart-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Logo</th>
                                        <th class="pro-title">Entreprise</th>
                                        <th class="pro-title">Domaine</th>
                                        <th class="pro-title">Poste</th>
                                        <th class="pro-title">Localisation</th>
                                        <th class="pro-title">Type</th>
                                        <th class="pro-subtotal">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jobs as $job)
                                        <tr>
                                            <td class="pro-thumbnail text-center"
                                                style="text-align: center; vertical-align: middle;"><img
                                                    src="{{ $job->imageUrl() }}" alt="{{ $job->company }}">
                                            </td>
                                            <td class="pro-price"><span>{{ $job->company }}</span></td>
                                            <td class="pro-price"><span>{{ $job->domain }}</span></td>
                                            <td class="pro-title text-center">{{ $job->job_title }}</td>
                                            <td class="pro-title text-center"><i class="feather-map-pin"></i>
                                                {{ $job->location }}</td>

                                            <td class="pro-price text-center"><span>{{ $job->type }}</span></td>
                                            <td class="pro-addtocart align-items-center">
                                                <a href="{{ route('jobs_detail_link', $job->slug) }}"
                                                    class="rbt-btn btn-gradient text-center"><i
                                                        class="feather-eye"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </form>
                </div>

            </div>
            {{ $jobs->links() }}
        </div>
    </div>
</div>
