# quic-version-detector-webfrontend
Web-frontend to quic-version-detector, that detects the versions of gQUIC a web server is utilizing.

# Prerequisites:
You will need:

- `pip3`,
- `quic-version-detector`,
- `php5.6+` and
- `aha`

installed on your system. Tested on Debian x86_64 sid.

# Installation
Installing dependencies:

```sh
sudo apt install -y python3-pip php5-fpm aha
sudo pip3 install quic-version-detector
```

Now copy all the files to your www-folder and give quicver.php 755 permission.

```sh
git clone https://github.com/Henrocker/quic-version-detector-webfrontend.git
cd quic-version-detector-webfrontend
sudo chmod 755 quicver.php
```

You are now ready to test. Visit _yoursite.com/quic-version-detector-webfrontend_.
Have fun!

## Quicklinks:
- [quic-version-detector](https://github.com/povilasb/quic-version-detector)
- [AHA](https://github.com/theZiz/aha)
