from flask import Flask, request, jsonify
import pandas as pd
import numpy as np
from joblib import load
import json
from sklearn.ensemble import RandomForestClassifier

app = Flask(__name__)

# Load your trained machine learning model
model = load('resources\model.pkl')

@app.route('/predict', methods=['GET','POST'])
def predict():
    # Get input data from the request
    json_data = request.json
    dict_data = json.loads(json_data)
    df = pd.DataFrame([dict_data])

    # Perform inference using the loaded model
    prediction = model.predict_proba(df)
    y_compare = {'major': model.classes_, 'percent': np.round(prediction[0]*100)}
    predictions = pd.DataFrame(y_compare)
    predictions = predictions.sort_values(by='percent',ascending=False).reset_index(drop=True)
    predictions = predictions.head(3)
    json_data = predictions.to_json(orient='records')

    # Return the prediction as JSON response
    return  json_data

if __name__ == "__main__":
    app.run(port=5000)
