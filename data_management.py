from flask import Flask, request

app = Flask(__name__)

@app.route('/data_management', methods=['GET'])
def data_management():
    try:
        numbers = [request.args.get(key, type=float) for key in ['a', 'b', 'c', 'd', 'e']]
        
        if None in numbers:
            return "Error: All inputs must be provided and numeric.", 400
        
        negatives = [num for num in numbers if num < 0]
        negative_msg = "There are negative values." if negatives else "All values are non-negative."
        
        avg = sum(numbers) / len(numbers)
        avg_msg = "Average is greater than 50." if avg > 50 else "Average is 50 or less."
        
        positive_count = sum(1 for num in numbers if num > 0)
        parity_msg = "Even count of positive numbers." if positive_count & 1 == 0 else "Odd count of positive numbers."
        
        filtered_sorted_list = sorted([num for num in numbers if num > 10])
        
        return f"""
        <html>
        <body>
            <p>Original numbers: {numbers}</p>
            <p>{negative_msg}</p>
            <p>{avg_msg}</p>
            <p>{parity_msg}</p>
            <p>Filtered and sorted numbers (greater than 10): {filtered_sorted_list}</p>
        </body>
        </html>
        """
    except ValueError:
        return "Error: Invalid input detected.", 400

if __name__ == '__main__':
    app.run(debug=True)
