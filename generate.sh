#!/bin/bash

SPEC_VERSION=8.0.2


openapi-generator generate -i spec/api_"$SPEC_VERSION".yaml -g php -o ./ --package-name=customscripts/jelastic-api --strict-spec=true \
    --git-user-id=customscripts --git-repo-id=jelastic-api \
    --additional-properties=variableNamingConvention=camelCase \
    --additional-properties=composerPackageName=customscripts/jelastic-api
