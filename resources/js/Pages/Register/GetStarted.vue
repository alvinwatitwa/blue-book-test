<script setup>

    import {ref} from 'vue';
    import { googleSdkLoaded } from 'vue3-google-login';
    import axios from 'axios';
    import Layout from '../../layouts/Layout.vue';

    const navigateToRegister = async() => {
        window.location.href = '/register-with-email';
    }

    const clientId = ref('590809705232-6otk7ig5sidljkda5ofll6bcl2ng2dhj.apps.googleusercontent.com');
    const clientSecret = ref('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');
    const userData = ref({})

  const fetchUserDataFrom = async (code) => {
    try {
      localStorage.setItem('gCode', JSON.stringify(code))

      const { data } = await axios.post(
        'https://oauth2.googleapis.com/token',
        {
          code,
          client_id: clientId.value,
          client_secret: clientSecret.value,
          redirect_uri: 'http://127.0.0.1:8000/dashboard',
          grant_type: 'authorization_code',
        },
      )

      if (data) {
        const accessToken = data.access_token

        // Fetch user details using the access token
        const userObj = await axios.get(
          'https://www.googleapis.com/oauth2/v3/userinfo',
          {
            headers: {
              Authorization: `Bearer ${accessToken}`,
            },
          },
        )

        if (userObj && userObj.data) {
          // save copy in storage
          localStorage.setItem('user', JSON.stringify(userObj.data))
          userData.value = userObj.data
        }
        else {
          // Handle the case where userResponse or userResponse.data is undefined
          console.error('Failed to fetch user data')
        }
      }
    }
    catch (e) {
      console.error('Failed to exchaange token', e)
    }
  }

const signInWithGoogle = () => {
  googleSdkLoaded(google => {
    google.accounts.oauth2
      .initCodeClient({
        client_id: clientId.value,
        scope: 'email profile openid',
        redirect_uri:'http://127.0.0.1:8000/dashboard',
        callback: response => {
          if (response.code)
            fetchUserDataFrom(response.code)
        },
      })
      .requestCode()
  })
}

</script>
<template>
    <Layout>
        <div class="flex flex-col pb-20 bg-white leading-[140%]">
        <main class="flex flex-col self-center p-6 mt-72 max-w-full text-lg font-medium bg-white rounded-xl border border-gray-300 border-solid w-[500px] max-md:px-5 max-md:mt-10">
        <section>
            <h2 class="text-2xl font-semibold text-gray-900 max-md:max-w-full">Create Account</h2>
            <p class="mt-1 text-base text-gray-500 max-md:max-w-full">Create an account to start managing your tasks.</p>
            <button @click="signInWithGoogle" class="flex items-center justify-center w-full px-6 py-4 mt-4 text-center text-gray-900 bg-gray-100 rounded-lg max-md:px-5 max-md:max-w-full" aria-label="Continue with Google">
            <div class="flex gap-3">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b5b653fa655d47b22731285a3d7e12082e6c1c69c36efbe766c7579a60db9c3e?apiKey=36440029668448b78377e0e215175ca3&" alt="Google logo" class="self-start w-6 shrink-0 aspect-square" />
                <span>Continue with Google</span>
            </div>
            </button>
            <button class="flex justify-center w-full gap-3 px-6 py-4 mt-4 text-center text-white bg-blue-600 rounded-lg max-md:flex-wrap max-md:px-5" aria-label="Continue with Facebook">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/7529c63adb233de4c201dddcefeca62d85b1508516fd5c9c900ccfd8029669e8?apiKey=36440029668448b78377e0e215175ca3&" alt="Facebook logo" class="self-start w-6 shrink-0 aspect-square" />
            <span>Continue with Facebook</span>
            </button>
            <button @click.prevent="navigateToRegister()" class="items-center justify-center w-full px-6 py-4 mt-4 text-center text-white bg-blue-600 rounded-lg max-md:px-5 max-md:max-w-full" aria-label="Continue with Email">
                Continue with Email
            </button>
            <p class="mt-4 text-sm text-center text-blue-600 max-md:max-w-full">
            <span>Already have an account?</span>
            <span class="text-blue-600">Login</span>
            </p>
        </section>
        </main>
    </div>
</Layout>
  </template>


