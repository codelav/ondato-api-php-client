# ondato-api-php-client

Ondato API Client for PHP. Used for KYC and Verifid integration with Ondato flows.

# Requirements

- php7.1+

# Installation

Add github repository to your composer.json

```
"repositories": [
    {
      "type" : "vcs",
      "url"  : "https://github.com/velser/ondato-api-php-client.git"
    }
]
```

Add and install library

`composer require velser/ondato-api-php-client`

# Usage

### Kyc

```
$guzzleClient = new GuzzleHttp\Client([
    'timeout' => 10,
    'allow_redirects' => false,
    'base_uri' => 'https://ondatourl',
    'headers' => [
        'Accept' => 'application/json'
    ]
]);

$kycApiClient = new Velser\OndatoApiClient\KycApiClient($guzzleClient, 'apikey');
```


### Verifid

```
$guzzleClient = new GuzzleHttp\Client([
    'timeout' => 10,
    'allow_redirects' => false,
    'base_uri' => 'https://ondatourl',
    'headers' => [
        'Accept' => 'application/json'
    ]
]);

$kycApiClient = new Velser\OndatoApiClient\VerifidApiClient(
    $guzzleClient,
    'username',
    'password'
);
```

### Notes

- Accept header is mandatory, as it otherwise server will return multipart response when sending multipart request;
- base_uri is root uri of Ondato API without specific path;


# TODO

- add factory for quick client building via DI;
- tests;
- client exceptions remap to specific exceptions;

# Contribution/Maintaining

- Library is maintainable as it's needed. Any contribution/fixes/improvements are appreciated;
- This library is not related to Ondato itself. It's just an integration. So only this repository related stuff is discussed within this repository;

# License

MIT (Can be found in LICENSE file)