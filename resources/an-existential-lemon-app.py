# Imports
import json
import numpy as np
from ibm_watson import NaturalLanguageUnderstandingV1
from ibm_cloud_sdk_core.authenticators import IAMAuthenticator
from ibm_watson.natural_language_understanding_v1 import Features, EmotionOptions, EntitiesOptions, KeywordsOptions
# Personal variables
apikey = str(input("IBM Watson API Key: "))
url = str(input("IBM Watson URL: "))
amount_of_passages = int(input("Amount of Passages: "))
# Setting up the reuirements
authenticator = IAMAuthenticator(apikey)
natural_language_understanding = NaturalLanguageUnderstandingV1(version='2020-08-01',authenticator=authenticator)
natural_language_understanding.set_service_url(url)
# Getting the response from Watson
response_array = []
for i in range(amount_of_passages):
        input_text = str(input("Passage: "))
        response = natural_language_understanding.analyze(text=input_text,features=Features(emotion=EmotionOptions())).get_result()
        response_array.append(response)
print(response_array)
# Save the array as response.txt
np.savetxt("response.txt", np.array(response_array), fmt="%s")
