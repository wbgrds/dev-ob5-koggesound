<call-us 
phonesystem-url="https://1018.3cx.cloud" 
party="<?php echo $chatline ; ?>" 
id="wp-live-chat-by-3CX" 

enable="true" 
enable-onmobile="true" 
minimized="true" 
minimized-style="bubbleright" 
animation-style="noanimation" 
chat-delay="2000" 


allow-call="false" 
allow-video="false" 
enable-direct-call="false" 
allow-soundnotifications="true" 
enable-mute="true" 

lang="browser" 
call-title="call-title"
start-chat-button-text="Chat"

authentication="both" 

gdpr-enabled="true" 
offline-enabled="true" 
enable-ga="false" 
enable-poweredby="true"


operator-name="<?php echo $chatoperator; ?>"
show-operator-actual-name="false" 
operator-icon="<?php echo $chatoperatoricon; ?>" 

button-icon-type="doublebubble" 

ignore-queueownership="false" 
aknowledge-received="true" 

message-userinfo-format="both" 
message-dateformat="both" 

greeting-visibility="none" 
greeting-offline-visibility="none" 

></call-us>
<script defer src="https://downloads-global.3cx.com/downloads/livechatandtalk/v1/callus.js" id="tcx-callus-js" charset="utf-8"></script>
<script>
(function () {
  function patchShadow(shadow) {
    const replace = () => {
      shadow.querySelectorAll('span').forEach(span => {
        if (span.textContent.trim() === 'Powered by 3CX') {
          span.textContent = 'WEBGUARDS over 3CX';
        }
      });
    };

    replace();

    const observer = new MutationObserver(replace);
    observer.observe(shadow, {
      childList: true,
      subtree: true
    });
  }

  const hostObserver = new MutationObserver(() => {
    const host = document.getElementById('wp-live-chat-by-3CX');
    if (host && host.shadowRoot) {
      patchShadow(host.shadowRoot);
      hostObserver.disconnect();
    }
  });

  hostObserver.observe(document.body, {
    childList: true,
    subtree: true
  });
})();
</script>
