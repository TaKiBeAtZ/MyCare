import pandas as pd
import matplotlib.pyplot as plt
import seaborn as sns

def read_data(file_path):
    """
    Read data from a CSV file.
    
    Parameters:
        file_path (str): Path to the CSV file.
        
    Returns:
        DataFrame: Pandas DataFrame containing the data.
    """
    return pd.read_csv(file_path)

def generate_graphs(data):
    """
    Generate graphs from the provided data.
    
    Parameters:
        data (DataFrame): Pandas DataFrame containing the data.
    """
    # Graph 1: Histogram of Age
    plt.figure(figsize=(10, 6))
    sns.histplot(data['Age'], bins=20, kde=True, color='skyblue')
    plt.title('Distribution of Age')
    plt.xlabel('Age')
    plt.ylabel('Frequency')
    plt.grid(True)
    plt.show()

    # Graph 2: Bar chart of Gender
    plt.figure(figsize=(8, 5))
    sns.countplot(data['Gender'], palette='muted')
    plt.title('Distribution of Gender')
    plt.xlabel('Gender')
    plt.ylabel('Count')
    plt.grid(axis='y')
    plt.show()

    # Graph 3: Pie chart of Diagnosis
    plt.figure(figsize=(8, 8))
    data['Diagnosis'].value_counts().plot(kind='pie', autopct='%1.1f%%', colors=sns.color_palette('pastel'))
    plt.title('Diagnosis Distribution')
    plt.ylabel('')
    plt.show()

# Example usage
if __name__ == "__main__":
    file_path = 'healthcare_data.csv' 
    data = read_data(file_path)
    generate_graphs(data)
