import java.util.Scanner;

/**
 * Created by George-Lenovo on 4/7/2017.
 */
public class BombNumbers {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String input = in.nextLine();
        String[] numbersStr = input.split(" ");
        int[] numbers = new int[numbersStr.length];

        for (int i = 0; i < numbersStr.length; i++) {
            numbers[i] = Integer.parseInt(numbersStr[i]);
        }

        String input2 = in.nextLine();

        int bomb = Integer.parseInt(input2.split(" ")[0]);
        int power = Integer.parseInt(input2.split(" ")[1]);

        for (int i = 0; i < numbers.length; i++) {
            if (numbers[i] == bomb) {
                Detonate(numbers, i, power);
                numbers[i] = 0;
            }
        }

        PrintSum(numbers);
    }

    private static void PrintSum(int[] numbers) {
        long sum = 0;

        for(int number : numbers)
        {
            if (number != 0) {
                sum += number;
            }
        }

        System.out.println(sum);
    }

    private static void Detonate(int[] numbers, int i, int power) {
        int start = i - power;
        int end = i + power;

        if (start < 0) {
            start = 0;
        }
        if (end > numbers.length - 1) {
            end = numbers.length - 1;
        }

        DetonateLeft(numbers, start, i);
        DetonateRight(numbers, end, i);
    }

    private static void DetonateRight(int[] numbers, int end, int i) {
        for (int j = i + 1; j <= end; j++) {
            numbers[j] = 0;
        }
    }

    private static void DetonateLeft(int[] numbers, int start, int i) {
        for (int j = start; j < i; j++) {
            numbers[j] = 0;
        }
    }
}
