<% with $CTA %>
    <div class="call-to-action py-5 $ExtraClasses">
        <div class="text-center py-3">
            $Text
            <p class="h2">
                <% loop $Links %>
                    <% if LinkURL %>
                        <a{$IDAttr}<% if $Up.LightText %> class="text-light"<% end_if %> href="{$LinkURL}"{$TargetAttr}>
                            {$Title}
                        </a>
                    <% end_if %>
                <% end_loop %>
            </p>
        </div>
    </div>
<% end_with %>