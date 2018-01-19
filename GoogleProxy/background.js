chrome.webRequest.onBeforeRequest.addListener(
  function(details){
    patt = /(?<=\=).*?(?=&)/;
    list1 = patt.exec(details.url);
    if (list1){return {redirectUrl:list1[0]};
   }
  },
  {urls:["*://xiaoeryq-001-site1.site4future.com/*"]},
  ["blocking"]
)
