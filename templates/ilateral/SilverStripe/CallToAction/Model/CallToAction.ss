<% with $CTA %>
    <div class="call-to-action py-5 $ExtraClasses">
        <div class="container text-center py-3">
            <div class="row justify-content-center mx-0">
                <div class="col-auto pl-0 pr-1">
                    $Text
                </div>
                <div class="col-auto pr-0 pl-1">
                    <p class="h2 mb-0">
                        <% loop $Links %>
                            <% if LinkURL %>
                                <a{$IDAttr}<% if $Up.LightText %> class="text-light"<% end_if %> href="{$LinkURL}"{$TargetAttr}>
                                    {$Title}
                                </a>
                                <% if not $Last %>$Up.LinkDivider<% end_if %>
                            <% end_if %>
                        <% end_loop %>
                    </p>
                </div>
            </div>
        </div>
    </div>
<% end_with %>