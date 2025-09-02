# Zerotoprod\SslCertValidatorCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/ssl-cert-validator-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/ssl-cert-validator-cli/test.yml?label=test)](https://github.com/zero-to-prod/ssl-cert-validator-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/ssl-cert-validator-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/ssl-cert-validator-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/ssl-cert-validator-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/ssl-cert-validator-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/ssl-cert-validator-cli?color=blue)](https://packagist.org/packages/zero-to-prod/ssl-cert-validator-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/ssl-cert-validator-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/ssl-cert-validator-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/ssl-cert-validator-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/ssl-cert-validator-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/ssl-cert-validator-cli?color=pink)](https://github.com/zero-to-prod/ssl-cert-validator-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/ssl-cert-validator-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/ssl-cert-validator-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/ssl-cert-validator-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/ssl-cert-validator-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`ssl-cert-validator-cli:src`](#ssl-cert-validator-clisrc)
    - [`ssl-cert-validator-cli:validate-cert`](#ssl-cert-validator-clivalidate-cert)
    - [`ssl-cert-validator-cli:validate-host`](#ssl-cert-validator-clivalidate-host)
    - [`ssl-cert-validator-cli:get-cert`](#ssl-cert-validator-cliget-cert)
    - [`ssl-cert-validator-cli:self-signed-cert`](#ssl-cert-validator-cliself-signed-cert)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\SslCertValidatorCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/ssl-cert-validator-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/ssl-cert-validator-cli)
vendor/bin/zero-to-prod-ssl-cert-validator-cli

# Publish to custom directory
vendor/bin/zero-to-prod-ssl-cert-validator-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-ssl-cert-validator-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-ssl-cert-validator-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/ssl-cert-validator-cli list
```

### Available Commands

#### `ssl-cert-validator-cli:src`

Displays the project's GitHub repository URL.

**Usage:**
```shell
vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:src
```

**Arguments:** None

**Example:**
```shell
$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:src
https://github.com/zero-to-prod/ssl-cert-validator-cli
```

#### `ssl-cert-validator-cli:validate-cert`

Determines if an SSL certificate is valid for a given hostname. Returns the hostname if valid, empty string otherwise.

**Usage:**
```shell
vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-cert <hostname>
```

**Arguments:**
- `hostname` (required) - The hostname to validate the SSL certificate for

**Example:**
```shell
$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-cert google.com
google.com

$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-cert expired-ssl.badssl.com

```

#### `ssl-cert-validator-cli:validate-host`

Determines if a hostname is valid. Returns the hostname if valid, empty string otherwise.

**Usage:**
```shell
vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-host <hostname>
```

**Arguments:**
- `hostname` (required) - The hostname to validate

**Example:**
```shell
$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-host google.com
google.com

$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:validate-host not-a-real-domain.invalid

```

#### `ssl-cert-validator-cli:get-cert`

Retrieves SSL certificate information for a given hostname in JSON format.

**Usage:**
```shell
vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:get-cert <hostname>
```

**Arguments:**
- `hostname` (required) - The hostname to retrieve SSL certificate information for

**Example:**
```shell
$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:get-cert google.com
{
    "peer_name": "google.com",
    "subject": {
        "C": "US",
        "ST": "California",
        "L": "Mountain View",
        "O": "Google LLC",
        "CN": "*.google.com"
    },
    "hash": "da39a3ee5e6b4b0d3255bfef95601890afd80709",
    "issuer": {
        "C": "US",
        "O": "Google Trust Services LLC",
        "CN": "GTS CA 1C3"
    },
    "version": 2,
    "serialNumber": "146039877946405419661966247515595831766",
    "validFrom": "2024-12-09 08:12:19",
    "validTo": "2025-03-03 08:12:18",
    "validFrom_time_t": 1733734339,
    "validTo_time_t": 1741251138,
    "signatureTypeSN": "RSA-SHA256",
    "signatureTypeLN": "sha256WithRSAEncryption",
    "signatureTypeNID": 668,
    "purposes": {
        "1": [
            true,
            false,
            "sslclient"
        ],
        "2": [
            true,
            false,
            "sslserver"
        ],
        "3": [
            true,
            false,
            "nssslserver"
        ]
    },
    "extensions": {
        "keyUsage": "Digital Signature",
        "extendedKeyUsage": "TLS Web Server Authentication",
        "basicConstraints": "CA:FALSE",
        "subjectKeyIdentifier": "A6:4B:D3:6E:B3:3C:4A:29:4D:C4:3F:5B:8B:2E:1E:E2:A1:C2:8D:4B",
        "authorityKeyIdentifier": "keyid:8A:74:7F:AF:85:CD:EE:95:CD:3D:9C:D0:E2:46:14:F3:71:35:1D:27",
        "authorityInfoAccess": "OCSP - URI:http://ocsp.pki.goog/gts1c3\nCA Issuers - URI:http://pki.goog/repo/certs/gts1c3.der",
        "subjectAltName": "DNS:*.google.com, DNS:*.appengine.google.com, DNS:*.bdn.dev, DNS:*.cloud.google.com, DNS:*.crowdsource.google.com, DNS:*.datacompute.google.com, DNS:*.g.co, DNS:*.gcp.gvt2.com, DNS:*.gcpcdn.gvt1.com, DNS:*.ggpht.cn, DNS:*.gkecnapps.cn, DNS:*.google-analytics.com, DNS:*.google.ca, DNS:*.google.cl, DNS:*.google.co.in, DNS:*.google.co.jp, DNS:*.google.co.uk, DNS:*.google.com.ar, DNS:*.google.com.au, DNS:*.google.com.br, DNS:*.google.com.co, DNS:*.google.com.mx, DNS:*.google.com.tr, DNS:*.google.com.vn, DNS:*.google.de, DNS:*.google.es, DNS:*.google.fr, DNS:*.google.hu, DNS:*.google.it, DNS:*.google.nl, DNS:*.google.pl, DNS:*.google.pt, DNS:*.googleadapis.com, DNS:*.googleapis.cn, DNS:*.googleapis.com, DNS:*.googlevideo.com, DNS:*.gstatic.cn, DNS:*.gstatic-cn.com, DNS:*.gstatic.com, DNS:*.gvt1.com, DNS:*.gvt2.com, DNS:*.metric.gstatic.com, DNS:*.urchin.com, DNS:*.url.google.com, DNS:*.wear.gkecnapps.cn, DNS:*.youtube-nocookie.com, DNS:*.youtube.com, DNS:*.youtubeeducation.com, DNS:*.youtubekids.com, DNS:*.yt.be, DNS:*.ytimg.com, DNS:android.com, DNS:chromium.org, DNS:dartsearch.net, DNS:ggpht.cn, DNS:gkecnapps.cn, DNS:goo.gl, DNS:google-analytics.com, DNS:google.com, DNS:googleadapis.com, DNS:googleapis.cn, DNS:googleapis.com, DNS:googlesource.com, DNS:googlevideo.com, DNS:gstatic.cn, DNS:gstatic-cn.com, DNS:gstatic.com, DNS:gvt1.com, DNS:gvt2.com, DNS:urchin.com, DNS:wear.gkecnapps.cn, DNS:youtu.be, DNS:youtube.com, DNS:youtubeeducation.com, DNS:youtubekids.com, DNS:yt.be, DNS:ytimg.com",
        "certificatePolicies": "Policy: 2.23.140.1.2.1\nPolicy: 1.3.6.1.4.1.11129.2.5.3",
        "crlDistributionPoints": "Full Name:\n  URI:http://crls.pki.goog/gts1c3/fVJxbF-Ktmg.crl",
        "ct_precert_scts": "Signed Certificate Timestamp"
    }
}
```

#### `ssl-cert-validator-cli:self-signed-cert`

Determines if the SSL certificate is self-signed for a given hostname. Returns the hostname if self-signed, empty string otherwise.

**Usage:**
```shell
vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:self-signed-cert <hostname>
```

**Arguments:**
- `hostname` (required) - The hostname to check for self-signed certificate

**Example:**
```shell
$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:self-signed-cert self-signed.badssl.com
self-signed.badssl.com

$ vendor/bin/ssl-cert-validator-cli ssl-cert-validator-cli:self-signed-cert google.com

```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/ssl-cert-validator-cli/general):

```shell
docker run --rm davidsmith3/ssl-cert-validator-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/ssl-cert-validator-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
