import { describe, expect, it } from "vitest";
import { getInitial } from "./student";

describe("getInitial", () => {
    it("returns initials from a full name", () => {
        expect(getInitial("Devia Artika Maharani")).toBe("DA");
    });

    it("returns question mark for an empty name", () => {
        expect(getInitial("")).toBe("?");
    });
});
