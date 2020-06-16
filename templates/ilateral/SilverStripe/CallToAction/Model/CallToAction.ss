<% with $CTA %>
    <div class="call-to-action py-5 $ExtraClasses">
        <div class="container text-center py-3">
            <p class="h2 mb-0">
                $Text
                <% loop $Links %>
                    <% if LinkURL %>
                        <a{$IDAttr}{$ClassAttr} href="{$LinkURL}"{$TargetAttr}>
                            {$Title}
                        </a>
                    <% end_if %>
                <% end_loop %>
            </p>
        </div>
    </div>
<% end_with %>