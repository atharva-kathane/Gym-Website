// install sw

self.addEventListener('install',evt=>{
    console.log('service installed'); 
    }
    );

// activate 
self.addEventListener('activate',evt=>{
    console.log('service worker activated');
        }
        );


//fetch
self.addEventListener('fetch',evt=>{
    console.log('fetch event', evt);
        }
        );

//sync
self.addEventListener('sync',evt=>{
    if (evt.tag == 'helloSync'){
        console.log("helloSync [sw.js]");
        }
    });