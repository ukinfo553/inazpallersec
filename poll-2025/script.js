const form = document.getElementById('pollform');
form.addEventListener('submit', handleFormSubmit);

const SERVICE_ACCOUNT_EMAIL = 'google-sheets-integration@placement-assistance-445211.iam.gserviceaccount.com'

const PRIVATE_KEY = `-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCy4IspvBZP6Qkt\nHamiFKXY6+G6dY8F3mVRtaDt5K2cjcjzgEWxRUBk2rqasX+CTA1qpHzoBwD+BMPb\n5G8Ci5PtEwiMQK3x2M7xecsAv2dAgi6g5IoGIRJRs/UP/wOdsusxdeGYiQnDvM3U\n/esmHa6YKco0Avw3bzH4RSVHe0+Ndw93emtArZUpQRtX5zHvfXCwk+TJtYJWYOnH\nRYvHSh8z/igIxafu1AOSQHgtsHcH7rpQvfKkP3tSQpoaf5mTClGWTIWCFmRD+6ZZ\nCrWZDMZWJ5CWX2XbWh0n0qRww7qxNcXHXn1jwCsY8Wcf2UTHnFitZjAg93ig/jRF\n7K1njJyfAgMBAAECggEAJCC26rh61yvtdwfBLaO29W962VKKDvjihNTGypV/vRlj\n505WhR3ECjqlKr5Dzxi2Mv5C3gggGq3ysvRZuW1gdKb9+HnNyAVukpXzOtTtsTk5\n2rQd7mv6i7bpfZAXdl/fIc+5vzmaV8bH2cdpGXswOrpiBQw/TaDvOkIY6+2LXTpC\nZG++YhH3gkookaDRnjXHH1VnVNvPsiDccO4hybTPdp+q2Nad8+TrTppitPwU81/2\nmGwM+1p/zRKDGh8l/wG0LMCYatr3flbBLiZPGpn68Pfd3LZz1r0rz/bJHS4/GKDF\nq+6JlH7NZ7/K+pg3LC80Uds749e6gk0qt3ebqXSoRQKBgQDtbJNwuzjz/fyXhUzR\ngc+dpKS7UTyn3La4hRqZgXLw3gsTES0YZFoDfxkf79V0aTOPZLSHNlFgNUxD1DpR\n4OEE2ht9ZkERKgfE/LOtEUbr4+/81IKi4vHoUeiN1mQxRvjobgt5ASChMlZHrIrJ\n5KzCFJPKoFIfx75Nks5M4ReAUwKBgQDA31DfAOEvoDnQDqXNV/skIRyNBUIZelwm\n/iLjCSECimEF9/HcEicBqQndJGDnzipO5cILqEVd+MKx0enf8OhXX4ul6wyaQjlw\nGtWD2MxP6837RoqfJeo7NyCZDhl682Sm32Dur0MVYhnCgJlwQEtvn/AoHUqpmqkV\ne040GVUZBQKBgQDPNO8Id50g9A06f8+nGM+FGWfbQu7Y4TtmlmO8jMkvhdnMbjUZ\nEJuuaYIX6Uw1KIsjHhSf3LvwZxOELvgm9Ufs4B0Vt+QZgsD9Hj4BUQ7AWFHeKelJ\nFx9gTfvTrcQLbZFV6JSCqoU7qZ67Ns55nOVZDHRfZsPFkKF5OiJp3hiQmQKBgBLi\nitebDXGNXbvKg1+M2tFZ0KLaPfOisH086wuR7EKEbCWadnsW5+zYsVeO5VItNKVP\nB+X+TvR5lA63QBAmVYmgmFrhnfVIwLkCV5+2TaMRsrSE3rPgkYPEzRNPdx070cIp\nIyOb05S3a1BJKTz9fqVqYqh63cGnnCC3Vxvw0w1FAoGAcVM43UYnBKPJ15sJAXoC\ngUXzkNJlLa7MzBWpD7gNOjejQwjKMmBEtAb2g+bwfr7oLNQJZaxgnUQeVa2mP2q0\nfiwEmtoNxmbV310RalEIdComLXcxyUc//C8Had6CUIupp4Dd+9zDor15K/75zcsw\nj6usXNbC0H5dATjFwqmqHI8=\n-----END PRIVATE KEY-----\n`

function handleFormSubmit(e){
    e.preventDefault()

    const inputElements = form.querySelectorAll('textarea')
    const data = {}

    for(const input of inputElements){
        data[input.dataset.heading || input.name || input.placeholder] = input.value
    }

    form.submit.disabled = true

    recordEntry(data)
    .finally(() => {
        form.submit.disabled = false
    })
}


async function recordEntry(data){
    try{
        const accessToken = await getAccessToken()

        const spreadSheetId = '1Upq59FkcZTDO_-AUHgo0ACrUe1eWmGsBq4Z8ey2cjKw';
        const range = `Sheet1!1:1`

        const sheet = await getSheet(accessToken, spreadSheetId, range)

        let requests = []
        let headings = sheet ?? []
        let newHeadings = Object.keys(data)
        let combinedHeadings = [...new Set([...headings, ...newHeadings])]

        if(combinedHeadings.length != headings.length) {
            requests.push({
                updateCells: {
                    range: {
                        sheetId: 0,
                        startRowIndex: 0,
                        endRowIndex: 1,
                        startColumnIndex: 0,
                        endColumnIndex: combinedHeadings.length
                    },
                    fields: "*",
                    rows: [{
                        values: combinedHeadings.map((heading) => ({
                            userEnteredValue: {stringValue: heading || ''},
                            userEnteredFormat: {
                                textFormat: { bold: true }
                            }
                        }))
                    }]
                }
            })
        }

        requests.push({
            appendCells: {
                sheetId: 0,
                fields: '*',
                rows: [{
                    values: combinedHeadings.map((heading) => ({
                        userEnteredValue: {stringValue: data[heading] ?? ''},
                    }))
                }],
            }
        })

        const url = `https://sheets.googleapis.com/v4/spreadsheets/${spreadSheetId}:batchUpdate`
        const response = await fetch(url, {
            method: 'POST',
            body: JSON.stringify({requests}),
            headers: {
                Authorization: `Bearer ${accessToken}`,
                'Content-Type': 'application/json'
            }
        })

        window.location = 'https://www.infosectrain.com/pages/poll-2025/thankyou.html'
    }catch(err){
        alert(err)
    }

}

async function getSheet(accessToken, spreadsheetId, range){
    const url = `https://sheets.googleapis.com/v4/spreadsheets/${spreadsheetId}/values/${range}`;
    const response = await fetch(url, {
        headers: {
          Authorization: `Bearer ${accessToken}`,
        },
      })
    const data = await response.json()
    return data.values?.[0] || null
}

async function getAccessToken() {
    // const serviceAccountEmail = atob(SERVICE_ACCOUNT_EMAIL).slice(2, -1);
    // const privateKey = atob(PRIVATE_KEY).slice(3, -2).replace(/\\n/g, '\n');

    const serviceAccountEmail = SERVICE_ACCOUNT_EMAIL;
    const privateKey = PRIVATE_KEY.replace(/\\n/g, '\n');


    const now = Math.floor(Date.now() / 1000);

    const header = { alg: 'RS256', typ: 'JWT' };
    const claimSet = {
        iss: serviceAccountEmail,
        scope: 'https://www.googleapis.com/auth/spreadsheets',
        aud: 'https://oauth2.googleapis.com/token',
        exp: now + 3600,
        iat: now
    };

    const jwt = KJUR.jws.JWS.sign('RS256',
        JSON.stringify(header),
        JSON.stringify(claimSet),
        privateKey);


    const tokenResponse = await fetch('https://oauth2.googleapis.com/token', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            'grant_type': 'urn:ietf:params:oauth:grant-type:jwt-bearer',
            'assertion': jwt
        })
    });

    const data = await tokenResponse.json();
    return data.access_token;
}

function abc(){
    console.log('red team');
}